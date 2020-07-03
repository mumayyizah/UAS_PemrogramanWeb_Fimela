<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form edit</h5>
        <form action="" method="post" enctype="multipart/form-data">
        <?php
            $tampil = $conn->query("SELECT * FROM tb_celebrity WHERE id_celebrity = '$_GET[id_celebrity]'");
            $data = mysqli_fetch_array($tampil);
        ?>
            <div class="form-group">
                <label for="id_celebrity">ID</label>
                <input type="text" name="id_celebrity" id="id_celebrity" class="form-control" value="<?php echo $data['id_celebrity'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="judul_celebrity">Judul</label>
                <input type="text" name="judul_celebrity" id="judul_celebrity" class="form-control" value="<?php echo $data['judul_celebrity'];?>">
            </div>
            <div class="form-group">
                <label for="isi_celebrity">Keterangan</label>
                <textarea name="isi_celebrity" id="isi_celebrity" cols="30" rows="10" class="form-control" ><?php echo $data['isi_celebrity'];?></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label> <br>
                <img src="../gambar/<?php echo $data['gambar'];?>" style="width:100px; margin-left:15px; margin-bottom:10px;">
                <input type="file" name="gambar" id="gambar" class="form-control-file col-12">
            </div>
            <div>
                <button type="submit" name="simpan" class="btn btn-info"><span class="fas fa-save"></span></button>
                <a href="?page=celebrity" class="btn btn-warning"><span class="fas fa-arrow-circle-left"></span></a>
            </div>
        </form>
        <?php
            if(isset($_POST['simpan'])){
                $id_celebrity = @$_POST['id_celebrity'];
                $judul_celebrity = @$_POST['judul_celebrity'];
                $isi_celebrity = @$_POST['isi_celebrity'];
                $gambar = @$_FILES['gambar']['name'];
                
                if(empty($gambar)){
                    $simpan = $conn->query("UPDATE tb_celebrity SET judul_celebrity = '$judul_celebrity',
                                                            isi_celebrity = '$isi_celebrity'
                                                            WHERE id_celebrity = '$id_celebrity' ");

                    if($simpan){
                        ?>
                            <script>alert("Sukses");document.location.href="?page=celebrity";</script>
                        <?php
                    }else{
                        ?>
                            <script>alert("Gagal");</script>
                        <?php
                    }
                }else{
                    $hapus = $conn->query("SELECT * FROM tb_celebrity WHERE id_celebrity='$_POST[id_celebrity]'");
                    $nama_gambar = mysqli_fetch_array($hapus);
                    $lokasi = $nama_gambar['gambar'];
                    $hapus_gambar = "../gambar/$lokasi";

                    unlink($hapus_gambar);
                    move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$gambar);
                    
                    $simpan = $conn->query("UPDATE tb_celebrity SET judul_celebrity = '$judul_celebrity',
                                                            isi_celebrity = '$isi_celebrity',
                                                            gambar = '$gambar'
                                                            WHERE id_celebrity = '$id_celebrity' ");

                    if($simpan){
                        ?>
                            <script>alert("Sukses");document.location.href="?page=celebrity";</script>
                        <?php
                    }else{
                        ?>
                            <script>alert("Gagal");</script>
                        <?php
                    }
                }
            }
        ?>
    </div>
</div>
