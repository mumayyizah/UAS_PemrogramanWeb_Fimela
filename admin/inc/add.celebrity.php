<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form tambah</h5>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul_celebrity">Judul</label>
                <input type="text" name="judul_celebrity" id="judul_celebrity" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="isi_celebrity">Isi</label>
                <textarea name="isi_celebrity" id="isi_celebrity" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control-file col-12" required>
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
                
                $simpan = $conn->query("INSERT into tb_celebrity(judul_celebrity, isi_celebrity, gambar)
                                        VALUES('$judul_celebrity', '$isi_celebrity', '$gambar')");
                move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$gambar);

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
        ?>
    </div>
</div>
