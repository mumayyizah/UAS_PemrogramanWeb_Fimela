<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form tambah</h5>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul_beauty">Judul</label>
                <input type="text" name="judul_beauty" id="judul_beauty" class="form-control">
            </div>
            <div class="form-group">
                <label for="ket_beauty">Keterangan</label>
                <textarea name="ket_beauty" id="ket_beauty" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control-file col-12" required>
            </div>
            <div>
                <button type="submit" name="simpan" class="btn btn-info"><span class="fas fa-save"></span></button>
                <a href="?page=user" class="btn btn-warning"><span class="fas fa-arrow-circle-left"></span></a>
            </div>
        </form>
        <?php
            if(isset($_POST['simpan'])){
                $id_beauty = @$_POST['id_beauty'];
                $judul_beauty = @$_POST['judul_beauty'];
                $ket_beauty = @$_POST['ket_beauty'];
                $gambar = @$_FILES['gambar']['name'];
                
                $simpan = $conn->query("INSERT into tb_beauty(judul_beauty, ket_beauty, gambar)
                                        VALUES('$judul_beauty', '$ket_beauty', '$gambar')");
                move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$gambar);

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
        ?>
    </div>
</div>
