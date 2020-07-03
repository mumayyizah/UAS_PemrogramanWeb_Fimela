<?php 

if(empty($data['gambar'])){
	$conn->query("DELETE FROM tb_celebrity WHERE id_celebrity='$_GET[id_celebrity]'");
}else{
	$hapus = $conn->query("SELECT * FROM tb_celebrity WHERE id_celebrity='$_GET[id_celebrity]'");

	$nama_gambar = mysqli_fetch_array($hapus);
	$lokasi = $nama_gambar['gambar'];
	$hapus_gambar = "../gambar/$lokasi";

	unlink($hapus_gambar);
	$conn->query("DELETE FROM tb_celebrity WHERE id_celebrity='$_GET[id_celebrity]'");
}
?>
<script type="text/javascript">alert("Hapus Data berhasil");document.location.href="?page=celebrity";</script>