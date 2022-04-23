<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
    </head>
    <body>
        <?php
        include "koneksi.php";
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_014 WHERE id_014=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <h1>Form Edit data 014</h1>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form method="post" action="update.php">
        <input type="hidden" name="id_014" value="<?php echo $row['id_014']?>">
       <table>
            <tr class="form-group">
                <td>
                    <label>Nama 014</label>
                </td>
                <td>
                    <input type="text" name="nama_014" value="<?php echo $row['nama_014']?>" placeholder="Input Nama disini !" ruqueired>
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    <label>Email 014</label>
                </td>
                <td>
                    <input type="text" name="email_014" value="<?php echo $row['email_014']?>" placeholder="Input email disini !" ruqueired>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="simpan">Update</button>
                </td>
            </tr>
       </table>
        </form>
        <?php } ?>
    </body>
</html>