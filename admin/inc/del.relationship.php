<?php 

if(empty($data['gambar'])){
	$conn->query("DELETE FROM tb_relationship WHERE id_relationship='$_GET[id_relationship]'");
}else{
	$hapus = $conn->query("SELECT * FROM tb_relationship WHERE id_relationship='$_GET[id_relationship]'");

	$nama_gambar = mysqli_fetch_array($hapus);
	$lokasi = $nama_gambar['gambar'];
	$hapus_gambar = "../gambar/$lokasi";

	unlink($hapus_gambar);
	$conn->query("DELETE FROM tb_relationship WHERE id_relationship='$_GET[id_relationship]'");
}
?>
<script type="text/javascript">alert("Hapus Data berhasil");document.location.href="?page=relationship";</script>