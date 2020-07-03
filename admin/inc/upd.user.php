<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Form tambah</h5>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
            $tampil = $conn->query("SELECT * FROM tb_user WHERE id = '$_GET[id]'");
            $data = mysqli_fetch_array($tampil);
            ?>
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" class="form-control" value="<?php echo $data['id'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama_lengkap">Nama</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?php echo $data['nama_lengkap'];?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $data['email'];?>">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?php echo $data['username'];?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" value="<?php echo $data['password'];?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="Admin" <?php if($data['status']=='Admin'){echo "selected";} ?>>Admin</option>
                    <option value="User" <?php if($data['status']=='User'){echo "selected";} ?>>User</option>
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
                
                $simpan = $conn->query("UPDATE tb_user SET nama_lengkap = '$nama_lengkap',
                                                            username = '$username',
                                                            email = '$email',
                                                            password = '$password',
                                                            status = '$status'
                                                            WHERE id = '$id'");
                
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
