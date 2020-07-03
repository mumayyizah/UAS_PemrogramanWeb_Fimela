<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form tambah</h5>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul_fashion">Judul</label>
                <input type="text" name="judul_fashion" id="judul_fashion" class="form-control">
            </div>
            <div class="form-group">
                <label for="isi_fashion">Isi</label>
                <textarea name="isi_fashion" id="isi_fashion" cols="30" rows="10" class="form-control"></textarea>
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
                $id_fashion = @$_POST['id_fashion'];
                $judul_fashion = @$_POST['judul_fashion'];
                $isi_fashion = @$_POST['isi_fashion'];
                $gambar = @$_FILES['gambar']['name'];
                
                $simpan = $conn->query("INSERT into tb_fashion(judul_fashion, isi_fashion, gambar)
                                        VALUES('$judul_fashion', '$isi_fashion', '$gambar')");
                move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$gambar);

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
        ?>
    </div>
</div>
