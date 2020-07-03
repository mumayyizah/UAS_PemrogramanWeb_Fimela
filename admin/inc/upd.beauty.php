<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form edit</h5>
        <form action="" method="post" enctype="multipart/form-data">
        <?php
            $tampil = $conn->query("SELECT * FROM tb_beauty WHERE id_beauty = '$_GET[id_beauty]'");
            $data = mysqli_fetch_array($tampil);
        ?>
            <div class="form-group">
                <label for="id_beauty">ID</label>
                <input type="text" name="id_beauty" id="id_beauty" class="form-control" value="<?php echo $data['id_beauty'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="judul_beauty">Judul</label>
                <input type="text" name="judul_beauty" id="judul_beauty" class="form-control" value="<?php echo $data['judul_beauty'];?>">
            </div>
            <div class="form-group">
                <label for="ket_beauty">Keterangan</label>
                <textarea name="ket_beauty" id="ket_beauty" cols="30" rows="10" class="form-control" ><?php echo $data['ket_beauty'];?></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label> <br>
                <img src="../gambar/<?php echo $data['gambar'];?>" style="width:100px; margin-left:15px; margin-bottom:10px;">
                <input type="file" name="gambar" id="gambar" class="form-control-file col-12">
            </div>
            <div>
                <button type="submit" name="simpan" class="btn btn-info"><span class="fas fa-save"></span></button>
                <a href="?page=beauty" class="btn btn-warning"><span class="fas fa-arrow-circle-left"></span></a>
            </div>
        </form>
        <?php
            if(isset($_POST['simpan'])){
                $id_beauty = @$_POST['id_beauty'];
                $judul_beauty = @$_POST['judul_beauty'];
                $ket_beauty = @$_POST['ket_beauty'];
                $gambar = @$_FILES['gambar']['name'];
                
                if(empty($gambar)){
                    $simpan = $conn->query("UPDATE tb_beauty SET judul_beauty = '$judul_beauty',
                                                            ket_beauty = '$ket_beauty'
                                                            WHERE id_beauty = '$id_beauty' ");

                    if($simpan){
                        ?>
                            <script>alert("Sukses");document.location.href="?page=beauty";</script>
                        <?php
                    }else{
                        ?>
                            <script>alert("Gagal");</script>
                        <?php
                    }
                }else{
                    $hapus = $conn->query("SELECT * FROM tb_beauty WHERE id_beauty='$_POST[id_beauty]'");
                    $nama_gambar = mysqli_fetch_array($hapus);
                    $lokasi = $nama_gambar['gambar'];
                    $hapus_gambar = "../gambar/$lokasi";

                    unlink($hapus_gambar);
                    move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$gambar);
                    
                    $simpan = $conn->query("UPDATE tb_beauty SET judul_beauty = '$judul_beauty',
                                                            ket_beauty = '$ket_beauty',
                                                            gambar = '$gambar'
                                                            WHERE id_beauty = '$id_beauty' ");

                    if($simpan){
                        ?>
                            <script>alert("Sukses");document.location.href="?page=beauty";</script>
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
