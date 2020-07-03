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

<?php include "temp_header4.php";?>

<div class="fimela">
<div class="container">
	<div class="margin">
		<div class="tile1">
			<font class="font-tag">Celebrity</font>
			<P><a class="font-isi">Di-unfollow oleh Sang Suami, Ini 4 Fakta Pernikahan Laudya Cynthia Bella dan Engku Emran</a></P>
			<div class="author">
				<img src="img\photo\c1.PNG">
				<p><a class="font-isikonten">Fimela.com, Jakarta Kabar keretakan rumah tangga Laudya Cynthia Bella dan Engku Emran kembali menjadi pusat perhatian publik. Sejumlah tanda-tanda perpisahan muncul di akun Instagram pasangan yang menikah pada 8 September 2017 ini.</a></p>
				<p><a class="font-isikonten">Walaupun pernikahannya belum genap 3 tahun, akan tetapi kabar keretakan mereka sudah berhembus sejak 2019. Bahkan Laudya menghapus potret keluarganya di akun Instagram pribadinya.</a></p>
			</div>
			<div class="isi">
				<p class="font-isikonten">Dan kini kabar perpisahan mereka berhembus kembali setelah Engku Emran mengganti usernam Instagram-nya dari @iamkoombre menjadi @narmeukgne. Tak hanya itu saja, ia juga meng-unfollow akun Instagram Laudya Cynthia Bella. </p>
				<p class="font-isikonten">Terlepas dari hal tersebut, tidak ada salahnya jika kita membahas fakta-fakta pernikahan Laudya Cynthia Bella dan Engku Emran. Apa saja? Berikut Fimela.com merangkumkan khusus untuk Anda. </p>
				<p class="font-isikonten">Menikah 8 Seotember 2017 </p>
				<p><img src="img\photo\c2.PNG"></p>
				<p class="font-isikonten">8 September 2017 merupakan hari bagia bagi audya Cynthia Bella dan Engku Emran. Pasalnya di hari itu, Laudya dipinang oleh pujaan hatinya yakni pria asal Malaysia, Engku Emran. </p>
				<p class="font-isikonten">Pernikahan keduanya berhasil mencuri perhatian publik. Selain karena keputusan Laudya untuk menikah dengan duda satu anak, pesta pernikahan mereka juga digelar secara mewah. </p>
				<p class="font-isikonten">Maskawin Rp.950 Ribu </p>
				<p><img src="img\photo\c3.PNG"></p>
				<p class="font-isikonten">Dalam ijab kabul yang diucapkan Engku Emran, Bella menerima maskawin senilai 300 ringgit atau sekitar Rp 950 ribu. "Saya terima nikah Laudya Cynthia Bella dengan mas kawin sebagai 300 ringgit, tunai," begitu ucapan Engku Emran. Sang penghulu lantas memandu pembacaan Al Fatihah yang langsung diikuti oleh para hadirin. </p>
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