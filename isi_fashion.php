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
			<font class="font-tag">Fashion</font>
			<P><a class="font-isi">5 Tren Fashion yang Sedang Booming di Korea</a></P>
			<div class="author">
				<img src="img\photo\2.PNG">
				<p><a class="font-isikonten">Fimela.com, Jakarta Korea tak hanya sebagai kiblat skincare saja. Namun kini, generasi muda Korea berhasil menciptaka tren tersendiri di bidang fashion. Seperti yang dilansir dari whowhatwear.com, sejumlah tren fashion terlihat sangat menarik dan booming di Korea.</a></p>
				<p><a class="font-isikonten">Bagi Sahabat Fimela yang bosan dengan gaya itu-itu saja, simak inspirasi fashion berikut agar tampilan kalian semakin menarik dan penuh gaya.</a></p>
			</div>
			<div class="isi">
				<p class="font-isikonten">1. Neon </p>
				<p><img src="img\photo\3.PNG"></p>
				<p class="font-isikonten">Nuansa neon memang bukanlah hal baru. Namun kini, neon semakin menarik perhatian dan bisa dipadukan untuk wujudkan sejumlah gaya yang bisa dimaksimalkan dengan mudah. </p>
				<p class="font-isikonten">2. All White </p>
				<p><img src="img\photo\4.PNG"></p>
				<p class="font-isikonten">Nuansa all white selalu memberikan kesan anggun dan modern tanpa perlu banyak aksen. Tak heran, mengapa warna ini masih tetap jadi andalan dan semakin digemari oleh warga Korea. </p>
				<p class="font-isikonten">3. Baggy Jeans </p>
				<p><img src="img\photo\5.PNG"></p>
				<p class="font-isikonten">Baggy Jeans adalah model klasik yang digemari sepanjang masa. Di Korea, gaya yang identik dengan tahun 90-an kembali hadir dan tampil semakin kreatif, menarik dengan padanan yang lebih berani. </p>
				<p class="font-isikonten">4. Classic tailoring </p>
				<p><img src="img\photo\6.PNG"></p>
				<p class="font-isikonten">Classic tailoring, seperti blazer basic akan selalu mampu mewujudkan tampilan profesional yang dibutuhkan setiap saat. </p>
				<p class="font-isikonten">Long Short  </p>
				<p><img src="img\photo\7.PNG"></p>
				<p class="font-isikonten">Sedangkan memasuki musim panas, Korea juga menampilkan gaya menarik dengan Long Short yang bisa tampil seru saat berpadu dengan sneakers andalan.</p>
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