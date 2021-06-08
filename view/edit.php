<?php
include '../model/database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Barang</title>
</head>

<body>

    <h1>Edit Data </h1>
    <form action="../controller/proses.php?aksi=update" method="post">
        <?php 
foreach ($db->edit($_GET['id']) as $data) { ?>
        <table>
            <tr>
                <td>Merek</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id']?>">
                    <input type="text" name="merek" value="<?php echo $data['merek']?>">
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="harga" value="<?php echo $data['harga']?>"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
        <?php } ?>
    </form>
</body>

</html>