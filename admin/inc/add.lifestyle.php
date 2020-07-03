<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form tambah</h5>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul_lifestyle">Judul</label>
                <input type="text" name="judul_lifestyle" id="judul_lifestyle" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="isi_lifestyle">Isi</label>
                <textarea name="isi_lifestyle" id="isi_lifestyle" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control-file col-12" required>
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
                
                $simpan = $conn->query("INSERT into tb_lifestyle(judul_lifestyle, isi_lifestyle, gambar)
                                        VALUES('$judul_lifestyle', '$isi_lifestyle', '$gambar')");
                move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$gambar);

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
        ?>
    </div>
</div>
