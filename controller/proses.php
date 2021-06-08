<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah"){
    $db->input($_POST['merek'],$_POST['harga'],$_POST['email']);
    header("location:../view/tampil.php");
}else if ($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampil.php");
}else if ($aksi == "update"){
    $db->update($_POST['merek'],$_POST['harga'],$_POST['email']);
    header("location:../view/tampil.php");
}
else if($aksi == "login"){
    if($_POST['name']=="admin"){

    }
    else{
        header("location:../view/index.php");
    }
}
?>