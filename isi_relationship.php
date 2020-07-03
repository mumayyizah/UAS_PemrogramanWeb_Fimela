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
			<font class="font-tag">LifeStyle</font>
			<P><a class="font-isi">Tips Aman Bersepeda saat Pandemi Sesuai Protokol Kesehatan</a></P>
			<div class="author">
				<img src="img\photo\r1.PNG">
				<p><a class="font-isikonten">Fimela.com, Jakarta Memasuki era new normal di tengah pandemi virus Corona yang masih berlangsung, semua orang menemukan cara atau alasan untuk keluar rumah. Alasan yang paling umum dilakukan saat ini adalah bersepeda, apa kamu juga melakukannya?</a></p>
			</div>
			<div class="isi">
				<p class="font-isikonten">Para ahli sepakat bahwa beraktivitas di luar ruangan sudah aman untuk dilakukan saat ini, salah satunya adalah bersepeda. Namun, masyarakat harus tetap mematuhi protokol kesehatan yang berlaku, terutama menjadi jarak sosial dengan orang.</p>
				<p class="font-isikonten">Hal yang sama berlaku ketika kamu ingin bersepeda, temukan lokasi yang tidak ramai atau menghindari tempat orang-orang berkerumun. Kamu juga sebaiknya tidak keluar rumah sama sekali ketika sakit atau saat bersepeda harus dalam kondisi prima seperti melansir dari refinery29.com.</p>
				<p class="font-isikonten">Tips aman bersepeda saat pandemi</p>
				<p><img src="img\photo\r2.PNG"></p>
				<p class="font-isikonten">Sedangkan masker adalah hal wajib lainnya yang harus kamu kenakan, namun jika lokasi tergolong sepi, kamu memiliki privilege untuk membukanya, namun begitu memasuki kerumunan, dipakai kembali. Temukan makser kain yang dapat membantumu bernapas dengan baik saat bersepeda.</p>
				<p class="font-isikonten">Selain itu, penting untuk membersihkan semua permukaan yang kamu sentuh saat bersepeda, baik itu setang, sadel, perpindahan gigi, atau pedal. Dan jangan lupa mencuci tanganmu setiap selesai atau sebelum beraktivitas.</p>
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