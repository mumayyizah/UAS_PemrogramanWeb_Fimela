<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Berita Lifestyle, Selebriti, Tips Cantik &amp; Fashion Terbaru | Fimela.com</title>
	<link rel="icon" href="img/favicon-32x32.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="fontawesomefree/css/all.min.css">
</head>
<body>

<?php include "temp_header5.php";?>


	<div class="margin">
	<div class="container text-center">
		<div class="row">
			<div class="col-sm">
				<img src="img/personality/1.jpg">
				</a>
				<br><font class="font-tag">Lifestyle</font>
				<br><a href="#"><font class="font-konten">Tips Aman Bersepeda saat Pandemi Sesuai Protokol Kesehatan</font></a>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="center">
		<div class="margin">
			<div class="row">
				<div class="col-sm border-bottom"></div>
				<div class="col-sm text-center">
					<h4><font face="Raleway, arial, helvetica, sans-serif" size="5">MOST TALKED ABOUT</font></h4>
				</div>
				<div class="col-sm border-bottom"></div>
			</div>
		</div>
		<div class="row">
			<div class="tile1">
				<div class="col">
					<?php
                include "koneksi.php";
                 $tampil_berita_cerita = $conn->query("SELECT * FROM tb_lifestyle");
                while($data = mysqli_fetch_array($tampil_berita_cerita)){
                ?>
                <p></p>
					<div class="media">
						<a href="#">
							<img src="gambar\<?php echo $data['gambar'];?>" width="200px" height="200px">
						</a>
						<div class="media-body"><font class="font-tag">Lifestyle</font>
							<br>	<a href="#"><h5 class="font-konten"><?php echo $data['judul_lifestyle'];?></h5></a>
							<p class="font-sub"><?php echo $data['isi_lifestyle'];?></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<?php include "temp_pinggir.php";?>
			<?php include "temp_lifestyle.php";?>
	<div class="container">
		<div class="center">
			<div class="row">
			<div class="tile1">
				<div class="col">
					<?php
                include "koneksi.php";
                 $tampil_berita_cerita = $conn->query("SELECT * FROM tb_lifestyle2");
                while($data = mysqli_fetch_array($tampil_berita_cerita)){
                ?>
                <p></p>
					<div class="media">
						<a href="#">
							<img src="gambar\<?php echo $data['gambar'];?>" width="200px" height="200px">
						</a>
						<div class="media-body"><font class="font-tag">Lifestyle</font>
							<br>	<a href="#"><h5 class="font-konten"><?php echo $data['judul_lifestyle'];?></h5></a>
							<p class="font-sub"><?php echo $data['ket_lifestyle'];?></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
				<?php include "temp_pinggir.php";?>
				<?php include "temp_comunity.php";?>
		<div class="container">
			<div class="center">
				<?php
                include "koneksi.php";
                 $tampil_berita_cerita = $conn->query("SELECT * FROM tb_lifestyle2");
                while($data = mysqli_fetch_array($tampil_berita_cerita)){
                ?>
                <p></p>
					<div class="media">
						<a href="#">
							<img src="gambar\<?php echo $data['gambar'];?>" width="200px" height="200px">
						</a>
						<div class="media-body"><font class="font-tag">Lifestyle</font>
							<br>	<a href="#"><h5 class="font-konten"><?php echo $data['judul_lifestyle'];?></h5></a>
							<p class="font-sub"><?php echo $data['ket_lifestyle'];?></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
	</div>
</div>	
<p></p>

	<?php include "temp_footer.php";?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>