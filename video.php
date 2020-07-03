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

<?php include "temp_header.php";?>


<div class="margin">
	<div class="container text-center">
			<div class="row">
				<div class="col-sm">
					<a href=""><img src="img\personality\3.jpg"></a>
					<br><font class="font-tag">Fashion</font>
					<br><a href=""><font class="font-konten">Personal Style Rebecca Klopper</font></a>
				</div>
			</div>
		</div>
	</div>

<div class="container">
	<div class="margin">
		<div class="center">
			<div class="row">
				<div class="tile1">
					<div class="row">
						<div class="col-sm border-bottom"></div>
						<div class="col-sm text-center">
							<h2><font face="Raleway, arial, helvetica, sans-serif" size="5">NEWEST VIDEOS</font></h2>
						</div>
						<div class="col-sm border-bottom"></div>
					</div>
					   <div class="row"><?php
		                include "koneksi.php";
		                 $tampil_berita_cerita = $conn->query("SELECT * FROM tb_video");
		                while($data = mysqli_fetch_array($tampil_berita_cerita)){
		                ?>
					    <div class="col-sm">
					      <a href="isikonten.html"><img src="gambar\<?php echo $data['gambar'];?>" width="350px" height="170px"></a>
					      <p class="bg"><a class="font-tag">Lifestyle</a></p>
					      <a href="isikonten.html" class="font-judul"><?php echo $data['judul_video'];?>n</a>
					      <br><a class="font-tipis"><?php echo $data['ket_video'];?></a>
					    </div>
					    <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "temp_footer.php";?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>