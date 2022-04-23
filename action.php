<?php
include "koneksi.php";

$nama = $_POST['nama_014'];
$email = $_POST['email_014'];

$sql = "INSERT INTO tbl_014 VALUES(null, '$nama','$email')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi tambah data gagal";
}
else{
    echo "eksekusi tambah data berhasil <br>";
    echo "<a href = 'data_014.php'>Tampilkan Data </a>";
}

?>