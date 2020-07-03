<?php
$delete = $conn->query("DELETE FROM tb_user WHERE id = '$_GET[id]'");
if($delete){
    ?>
        <script>alert("Hapus Berhasil");document.location.href="?page=user";</script>
    <?php
}
?>