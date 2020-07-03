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

<div class="fimela">
<div class="container">
	<div class="margin">
		<div class="tile1">
			<font class="font-tag">Beauty</font>
			<P><a class="font-isi">Hindari Kebiasaan yang Bisa Membuat Rambut Cepat Rusak</a></P>
			<div class="author">
				<img src="img\photo\b1.PNG">
				<p><a class="font-isikonten">Fimela.com, Jakarta Memiliki rambut yang sehat, lembut dan berkilau, merupakan idaman setiap perempuan. Untuk membuat rambut tampak sehat, lembut dan berkilau, harus rajin melakukan perawatan rambut. Jika tidak rajin merawat rambut, rambut akan mudah rontok, patah hingga berketombe.</a></p>
				<p><a class="font-isikonten">Rambut rusak bisa disebabkan karena terlalu banyak menggunakan produk berbahan kimia, pengering rambut, bahkan beberapa kegiatan sehari-hari bisa membuat rambut cepat rusak.</a></p>
				<p><a class="font-isikonten">Agar rambut tidak mudah rusak, kenali beberapa kebiasaan yang harus dihindari untuk menjaga kesehatan rambutmu, dilansir dari berbagai sumber:</a></p>
			</div>
		<div class="row">
			<div class="col-sm border-bottom"></div>
				<div class="col-sm text-center">
					<h2><font face="Raleway, arial, helvetica, sans-serif" size="4">RELATED ARTICLES</font></h2>
				</div>
				<div class="col-sm border-bottom"></div>
			</div>
			<div class="row">
					<div class="col">
					<?php
                include "koneksi.php";
                 $tampil_berita_cerita = $conn->query("SELECT * FROM tb_fashion");
                while($data = mysqli_fetch_array($tampil_berita_cerita)){
                ?>
                <p></p>
					<div class="media">
						<a href="#">
							<img src="gambar\<?php echo $data['gambar'];?>" width="200px" height="200px">
						</a>
						<div class="media-body"><font class="font-tag">Fashion</font>
							<br>	<a href="#"><h5 class="font-konten"><?php echo $data['judul_fashion'];?></h5></a>
							<p class="font-sub"><?php echo $data['isi_fashion'];?></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
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