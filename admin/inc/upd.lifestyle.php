<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form edit</h5>
        <form action="" method="post" enctype="multipart/form-data">
        <?php
            $tampil = $conn->query("SELECT * FROM tb_lifestyle WHERE id_lifestyle = '$_GET[id_lifestyle]'");
            $data = mysqli_fetch_array($tampil);
        ?>
            <div class="form-group">
                <label for="id_lifestyle">ID</label>
                <input type="text" name="id_lifestyle" id="id_lifestyle" class="form-control" value="<?php echo $data['id_lifestyle'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="judul_lifestyle">Judul</label>
                <input type="text" name="judul_lifestyle" id="judul_lifestyle" class="form-control" value="<?php echo $data['judul_lifestyle'];?>">
            </div>
            <div class="form-group">
                <label for="isi_lifestyle">Keterangan</label>
                <textarea name="isi_lifestyle" id="isi_lifestyle" cols="30" rows="10" class="form-control" ><?php echo $data['isi_lifestyle'];?></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label> <br>
                <img src="../gambar/<?php echo $data['gambar'];?>" style="width:100px; margin-left:15px; margin-bottom:10px;">
                <input type="file" name="gambar" id="gambar" class="form-control-file col-12">
            </div>
            <div>
                <button type="submit" name="simpan" class="btn btn-info"><span class="fas fa-save"></span></button>
                <a href="?page=lifestyle" class="btn btn-warning"><span class="fas fa-arrow-circle-left"></span></a>
            </div>
        </form>
        <?php
            if(isset($_POST['simpan'])){
                $id_lifestyle = @$_POST['id_lifestyle'];
                $judul_lifestyle = @$_POST['judul_lifestyle'];
                $isi_lifestyle = @$_POST['isi_lifestyle'];
                $gambar = @$_FILES['gambar']['name'];
                
                if(empty($gambar)){
                    $simpan = $conn->query("UPDATE tb_lifestyle SET judul_lifestyle = '$judul_lifestyle',
                                                            isi_lifestyle = '$isi_lifestyle'
                                                            WHERE id_lifestyle = '$id_lifestyle' ");

                    if($simpan){
                        ?>
                            <script>alert("Sukses");document.location.href="?page=lifestyle";</script>
                        <?php
                    }else{
                        ?>
                            <script>alert("Gagal");</script>
                        <?php
                    }
                }else{
                    $hapus = $conn->query("SELECT * FROM tb_lifestyle WHERE id_lifestyle='$_POST[id_lifestyle]'");
                    $nama_gambar = mysqli_fetch_array($hapus);
                    $lokasi = $nama_gambar['gambar'];
                    $hapus_gambar = "../gambar/$lokasi";

                    unlink($hapus_gambar);
                    move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$gambar);
                    
                    $simpan = $conn->query("UPDATE tb_lifestyle SET judul_lifestyle = '$judul_lifestyle',
                                                            isi_lifestyle = '$isi_lifestyle',
                                                            gambar = '$gambar'
                                                            WHERE id_lifestyle = '$id_lifestyle' ");

                    if($simpan){
                        ?>
                            <script>alert("Sukses");document.location.href="?page=lifestyle";</script>
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
