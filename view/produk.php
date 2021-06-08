<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belanja</title>
</head>
<body>
<img src="pinky.png">
<form action="../view/keranjang1.php?aksi=tambah" method="post">
    <?php
    $list_barang = array(
        array("Baju", 100000),
        array("Celana", 120000),
        array("Sepatu", 300000),
        array("Sendal", 75000),
        array("Topi", 50000),
        array("Sabun", 7000),
        array("Sampo", 15000),
        array("Sikat Gigi", 12000),
        array("Pasta Gigi", 19000),
        array("Sabun Wajah", 55000),
        array("Minyak Goreng", 29000),
        array("Tepung Terigu", 17000),
        array("Gula Pasir", 18000),
        array("Madu", 195000),
        array("Mie", 5000),
        array("Telur", 50000)
    )
    ?>
<br>
<br>
<br>
<center>
    <h1>Price List Barang IndoJuni</h1>
    <form action="" method="POST">
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Beli</th>
            </tr>
            <?php
            foreach ($list_barang as $key => $value) {
                echo '<tr>

                <th>' . ($key + 1) . '</th>
                <td >' . $value[0] . '</td>
                <td align=right>' . $value[1]   . '</th>
                <td><input type="checkbox" name="' . $key . '" value="' . $value[1] . '"></td>
                
                </tr>';
            }
            ?>
            <tr>
                <th colspan="2">
                    <form action="belanja.php"><input type="submit" value="refresh"></form>
                </th>
                <th colspan="2"></a></a><input type="submit" name="enter" value="Beli">
                
            </tr>
            </th>
        </table>
    </form>
    <br>
    
</center>
</body>
</html>