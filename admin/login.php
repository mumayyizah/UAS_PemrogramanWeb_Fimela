<?php 
@session_start();
include "inc/koneksi.php";

if(@$_SESSION['Admin']){
	header("location:index.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesomefree/css/all.css">
</head>
<body class="bg-info">

    <div class="container" style="margin-top:8%;">
        <div align="center">
            <div class="col-5">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <img src="img/logo.png" alt="">
                        <h2 class="card-title" style="border-bottom:10px solid #17A2B8;padding-bottom:15px;"></h2>
                        <form action="" method="post" enctype="multipart/form-data" align="left">
                            <div class="form-group">
                                <label for="user">Username</label>
                                <input type="text" class="form-control" name="user" id="user" placeholder="Username">
                             </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                            </div>
                            <input type="submit" name="login" class="btn btn-info" value="Login">
                        </form>
                        <?php 
                        $user = @$_POST['user'];
                        $pass = @$_POST['pass'];
                        $login = @$_POST['login'];

                        if($login){
                        	if($user == "" || $pass == ""){
                        		?>
                        		<script type="text/javascript">alert("Username atau Password Tidak Tersedia");</script>
                        		<?php
                        	}else{
                        		$sql = $conn->query("SELECT * FROM tb_user WHERE username = '$user' and password = '$pass' ");
                        		$data = mysqli_fetch_array($sql);
                        		$cek = mysqli_num_rows($sql);
                        		if($cek >= 1){
                        			if($data['status'] == "Admin"){
                        				@$_SESSION['Admin'] = $data['id'];
                        				?>
                                        <script type="text/javascript">alert("Login Berhasil");document.location.href="index.php";</script>
                                        <?php
                        			}
                        		}else{
                        			?>
                                    <script type="text/javascript">alert("Login gagal");</script>
                                    <?php
                        		}
                        	}
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<?php } ?>