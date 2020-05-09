<?php
include("config.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM daftar_matkul WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('location: list-mata-kuliah.php');
    } else {
        die("Gagal Menghapus...");
    }
} else {
    die("Akses Dilarang...");
}
?>