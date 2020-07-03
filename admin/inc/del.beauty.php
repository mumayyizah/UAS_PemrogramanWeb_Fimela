<?php 

if(empty($data['gambar'])){
	$conn->query("DELETE FROM tb_beauty WHERE id_beauty='$_GET[id_beauty]'");
}else{
	$hapus = $conn->query("SELECT * FROM tb_beauty WHERE id_beauty='$_GET[id_beauty]'");

	$nama_gambar = mysqli_fetch_array($hapus);
	$lokasi = $nama_gambar['gambar'];
	$hapus_gambar = "../gambar/$lokasi";

	unlink($hapus_gambar);
	$conn->query("DELETE FROM tb_beauty WHERE id_beauty='$_GET[id_beauty]'");
}
?>
<script type="text/javascript">alert("Hapus Data berhasil");document.location.href="?page=beauty";</script>