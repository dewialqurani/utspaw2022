<?php
include "koneksi.php";

$id = $_POST['id_014'];
$nama = $_POST['nama_014'];
$email = $_POST['email_014'];

$sql = "UPDATE tbl_014 set nama_014='$nama', email_014='$email' WHERE id_014=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Edit Data gagal";
}
else{
    echo "Edit Data berhasil <br>";
    echo "<a href = 'data_014.php'>Tampilkan Data </a>";
}

?> 