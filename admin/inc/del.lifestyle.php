<?php 

if(empty($data['gambar'])){
	$conn->query("DELETE FROM tb_lifestyle WHERE id_lifestyle='$_GET[id_lifestyle]'");
}else{
	$hapus = $conn->query("SELECT * FROM tb_lifestyle WHERE id_lifestyle='$_GET[id_lifestyle]'");

	$nama_gambar = mysqli_fetch_array($hapus);
	$lokasi = $nama_gambar['gambar'];
	$hapus_gambar = "../gambar/$lokasi";

	unlink($hapus_gambar);
	$conn->query("DELETE FROM tb_lifestyle WHERE id_lifestyle='$_GET[id_lifestyle]'");
}
?>
<script type="text/javascript">alert("Hapus Data berhasil");document.location.href="?page=lifestyle";</script>