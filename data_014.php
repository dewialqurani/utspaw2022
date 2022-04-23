<?php
include  'koneksi.php';
$sql="SELECT * FROM tbl_014";
$hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
        <h1>Data XYZ</h1>
        <a href="form_014.php">Tambah Data </a> 
        <table width="90%" border="1" cellspacing="1">
            <tr>
                <td>Id_014</td>
                <td>Nama_014</td>
                <td>Email_014</td>
                <td>Action</td>
            </tr>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM tbl_014";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil))
                {
                ?>
                <tr>
                    <td><?=$row['id_014'];?></td>
                    <td><?=$row['nama_014'];?></td>
                    <td><?=$row['email_014'];?></td>
                    <td> <a href="form_edit.php?id=<?=$row['id_014']?>">Edit | <a href="delete.php?id=<?=$row['id_014']?>"> Delete</td>
                </tr>
                <?php }
                ?>
        </table>
    </body>
</html>