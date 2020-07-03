<?php 
@session_start();
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
	<div class="margin"><a class="font-masuk">MASUK</a>
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
		<a><font class="font-log">Email</font></a>
			<input type="text" placeholder="" name="email" required> 
		<a><font class="font-log">Kata Sandi</font></a><span class="pass"><a href="#" class="font-log"><font color="#bf0561">Lupa?</font></a></span>
			<input type="password" placeholder="" name="password" required>
		<center>
			<input type="checkbox" checked="checked"><span><font class="font-log">Ingat Saya</font></span>
		</center>
			<button type="submit" name="login" value="Login">Masuk</button>
		<center><span><a href="registrasi.php" class="font-log"><font color="#bf0561">Daftar Akun</font></a></span>
		</center>
	</div>
</form>

<?php
	if(isset($_POST['login'])){
		include 'koneksi.php';
		$cek = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'");
		$row = mysqli_fetch_array($cek);
		$count = mysqli_num_rows($cek);
		if($count > 0){
			echo "<script> alert('login berhasil'); window.location.href='home.php' </script>";
		}else{
			echo "email atau password salah";
		}
	}

?>
					
	
	<?php include "temp_footer.php";?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>
<?php ?>