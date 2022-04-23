<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "DELETE FROM tbl_014 WHERE id_014=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Data gagal dihapus";
}
else {
    echo "Data berhasil dihapus <br>";
    echo "<a href='data_014.php'>Tampilkan Data </a>";
}

?>