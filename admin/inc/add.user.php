<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form tambah</h5>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_lengkap">Nama</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
            <div>
                <button type="submit" name="simpan" class="btn btn-info"><span class="fas fa-save"></span></button>
                <a href="?page=user" class="btn btn-warning"><span class="fas fa-arrow-circle-left"></span></a>
            </div>
        </form>
        <?php
            if(isset($_POST['simpan'])){
                $id = @$_POST['id'];
                $nama_lengkap = @$_POST['nama_lengkap'];
                $username = @$_POST['username'];
                $email = @$_POST['email'];
                $password = @$_POST['password'];
                $status = @$_POST['status'];
                
                $simpan = $conn->query("INSERT into tb_user(nama_lengkap, username, email, password, status)
                                        VALUES('$nama_lengkap', '$username', '$email', '$password', '$status')");
                
                if($simpan){
                    ?>
                        <script>alert("Sukses");document.location.href="?page=user";</script>
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
