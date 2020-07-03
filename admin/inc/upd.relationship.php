<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form edit</h5>
        <form action="" method="post" enctype="multipart/form-data">
        <?php
            $tampil = $conn->query("SELECT * FROM tb_relationship WHERE id_relationship = '$_GET[id_relationship]'");
            $data = mysqli_fetch_array($tampil);
        ?>
            <div class="form-group">
                <label for="id_relationship">ID</label>
                <input type="text" name="id_relationship" id="id_relationship" class="form-control" value="<?php echo $data['id_relationship'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="judul_relationship">Judul</label>
                <input type="text" name="judul_relationship" id="judul_relationship" class="form-control" value="<?php echo $data['judul_relationship'];?>">
            </div>
            <div class="form-group">
                <label for="isi_relationship">Keterangan</label>
                <textarea name="isi_relationship" id="isi_relationship" cols="30" rows="10" class="form-control" ><?php echo $data['isi_relationship'];?></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label> <br>
                <img src="../gambar/<?php echo $data['gambar'];?>" style="width:100px; margin-left:15px; margin-bottom:10px;">
                <input type="file" name="gambar" id="gambar" class="form-control-file col-12">
            </div>
            <div>
                <button type="submit" name="simpan" class="btn btn-info"><span class="fas fa-save"></span></button>
                <a href="?page=relationship" class="btn btn-warning"><span class="fas fa-arrow-circle-left"></span></a>
            </div>
        </form>
        <?php
            if(isset($_POST['simpan'])){
                $id_relationship = @$_POST['id_relationship'];
                $judul_relationship = @$_POST['judul_relationship'];
                $isi_relationship = @$_POST['isi_relationship'];
                $gambar = @$_FILES['gambar']['name'];
                
                if(empty($gambar)){
                    $simpan = $conn->query("UPDATE tb_relationship SET judul_relationship = '$judul_relationship',
                                                            isi_relationship = '$isi_relationship'
                                                            WHERE id_relationship = '$id_relationship' ");

                    if($simpan){
                        ?>
                            <script>alert("Sukses");document.location.href="?page=relationship";</script>
                        <?php
                    }else{
                        ?>
                            <script>alert("Gagal");</script>
                        <?php
                    }
                }else{
                    $hapus = $conn->query("SELECT * FROM tb_relationship WHERE id_relationship='$_POST[id_relationship]'");
                    $nama_gambar = mysqli_fetch_array($hapus);
                    $lokasi = $nama_gambar['gambar'];
                    $hapus_gambar = "../gambar/$lokasi";

                    unlink($hapus_gambar);
                    move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$gambar);
                    
                    $simpan = $conn->query("UPDATE tb_relationship SET judul_relationship = '$judul_relationship',
                                                            isi_relationship = '$isi_relationship',
                                                            gambar = '$gambar'
                                                            WHERE id_relationship = '$id_relationship' ");

                    if($simpan){
                        ?>
                            <script>alert("Sukses");document.location.href="?page=relationship";</script>
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
