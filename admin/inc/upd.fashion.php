<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form edit</h5>
        <form action="" method="post" enctype="multipart/form-data">
        <?php
            $tampil = $conn->query("SELECT * FROM tb_fashion WHERE id_fashion = '$_GET[id_fashion]'");
            $data = mysqli_fetch_array($tampil);
        ?>
            <div class="form-group">
                <label for="id_fashion">ID</label>
                <input type="text" name="id_fashion" id="id_fashion" class="form-control" value="<?php echo $data['id_fashion'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="judul_fashion">Judul</label>
                <input type="text" name="judul_fashion" id="judul_fashion" class="form-control" value="<?php echo $data['judul_fashion'];?>">
            </div>
            <div class="form-group">
                <label for="isi_fashion">Keterangan</label>
                <textarea name="isi_fashion" id="isi_fashion" cols="30" rows="10" class="form-control" ><?php echo $data['isi_fashion'];?></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label> <br>
                <img src="../gambar/<?php echo $data['gambar'];?>" style="width:100px; margin-left:15px; margin-bottom:10px;">
                <input type="file" name="gambar" id="gambar" class="form-control-file col-12">
            </div>
            <div>
                <button type="submit" name="simpan" class="btn btn-info"><span class="fas fa-save"></span></button>
                <a href="?page=fashion" class="btn btn-warning"><span class="fas fa-arrow-circle-left"></span></a>
            </div>
        </form>
        <?php
            if(isset($_POST['simpan'])){
                $id_fashion = @$_POST['id_fashion'];
                $judul_fashion = @$_POST['judul_fashion'];
                $isi_fashion = @$_POST['isi_fashion'];
                $gambar = @$_FILES['gambar']['name'];
                
                if(empty($gambar)){
                    $simpan = $conn->query("UPDATE tb_fashion SET judul_fashion = '$judul_fashion',
                                                            isi_fashion = '$isi_fashion'
                                                            WHERE id_fashion = '$id_fashion' ");

                    if($simpan){
                        ?>
                            <script>alert("Sukses");document.location.href="?page=fashion";</script>
                        <?php
                    }else{
                        ?>
                            <script>alert("Gagal");</script>
                        <?php
                    }
                }else{
                    $hapus = $conn->query("SELECT * FROM tb_fashion WHERE id_fashion='$_POST[id_fashion]'");
                    $nama_gambar = mysqli_fetch_array($hapus);
                    $lokasi = $nama_gambar['gambar'];
                    $hapus_gambar = "../gambar/$lokasi";

                    unlink($hapus_gambar);
                    move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$gambar);
                    
                    $simpan = $conn->query("UPDATE tb_fashion SET judul_fashion = '$judul_fashion',
                                                            isi_fashion = '$isi_fashion',
                                                            gambar = '$gambar'
                                                            WHERE id_fashion = '$id_fashion' ");

                    if($simpan){
                        ?>
                            <script>alert("Sukses");document.location.href="?page=fashion";</script>
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
