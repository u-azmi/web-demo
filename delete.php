<?php
require_once("koneksi.php");

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM peserta WHERE id='$id'");
echo "<script>
    alert('Data berhasil dihapus');
    document.location='list_peserta.php';
</script>"
?>