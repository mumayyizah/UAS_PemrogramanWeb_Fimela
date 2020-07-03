<?php 

if(empty($data['gambar'])){
	$conn->query("DELETE FROM tb_fashion WHERE id_fashion='$_GET[id_fashion]'");
}else{
	$hapus = $conn->query("SELECT * FROM tb_fashion WHERE id_fashion='$_GET[id_fashion]'");

	$nama_gambar = mysqli_fetch_array($hapus);
	$lokasi = $nama_gambar['gambar'];
	$hapus_gambar = "../gambar/$lokasi";

	unlink($hapus_gambar);
	$conn->query("DELETE FROM tb_fashion WHERE id_fashion='$_GET[id_fashion]'");
}
?>
<script type="text/javascript">alert("Hapus Data berhasil");document.location.href="?page=fashion";</script>