<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Berita Lifestyle, Selebriti, Tips Cantik &amp; Fashion Terbaru | Fimela.com</title>
	<link rel="icon" href="img/favicon-32x32.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php include "tmp_header.php";?>


<div class="container text-center">
	<div class="margin"><a href="login.php" class="font-masuk">MASUK</a>
	</div>
	<div class="margin"><a>Gunakan akun media sosial Anda untuk dapat<br>mengakses seluruh fitur Fimela.com.</a>
		<p>
			<a href="https://www.fimela.com/auth/facebook?back-to=https%3A%2F%2Fwww.fimela.com%2Fphoto"><button class="button-fb">FACEBOOK</button></a>
			<a href="https://www.fimela.com/auth/google?back-to=https%3A%2F%2Fwww.fimela.com%2Fphoto"><button class="button-g">GOOGLE</button></a>
		</p><a>Atau masuk dengan akun yang sudah ada</a>
	</div>
</div>
<form action="" method="post">
	<div class="container">
		<a><font class="font-log">nama lengkap</font></a>
			<input type="text" id="nama_lengkap" placeholder="" name="nama" required>
		<a><font class="font-log">username</font></a>
			<input type="text" id="username" placeholder="" name="username" required>
		<a><font class="font-log">email</font></a>
			<input type="text" id="email" placeholder="" name="email" required>	 
		<a><font class="font-log">password</font></a>
			<input type="password" placeholder="" name="password" required>	
			<span><font class="font-log">Dengan mendaftar, anda telah setuju dengan syarat dan ketentuan yang berlaku</font></span>
			<button type="submit" name="register">register</button>
	</div>
</form>
					<?php
                      if(isset($_POST['register'])){
                        $id = @$_POST['id'];
                        $nama_lengkap = @$_POST['nama_lengkap'];
                        $username = @$_POST['username'];
                        $email = @$_POST['email'];
                        $pesan = @$_POST['password'];

                        $register = $conn->query("INSERT INTO tb_user(nama_lengkap, username, email, password)
                                              VALUES('$nama_lengkap', '$username', '$email', '$pesan')");
                        if($register){
                          ?>
                            <script>alert("Daftar Berhasil :)");document.location.href="login.php";</script>
                          <?php
                        }else{
                          ?>
                            <script>alert("Gagal");</script>
                          <?php
                        }  
                    }
                    ?>

	

	<?php include "temp_footer.php";?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>