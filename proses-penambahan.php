<?php
require("config.php");

if(isset($_POST['daftar'])) {
    $matkul_id = $_POST['matkul_id'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $semester = $_POST['semester'];
    $nama_dosen = $_POST['nama_dosen'];
    $nama_asdos = $_POST['nama_asisten_dosen'];
    $no_hp_dosen = $_POST['no_handphone_dosen'];
    $no_hp_asdos = $_POST['no_handphone_asisten_dosen'];

    $sql = "INSERT INTO daftar_matkul (matkul_id, mata_kuliah, semester, nama_dosen, nama_asisten_dosen, no_handphone_dosen, no_handphone_asisten_dosen)
            VALUE ('$matkul_id', '$mata_kuliah', '$semester', '$nama_dosen', '$nama_asdos', '$no_hp_dosen', '$no_hp_asdos')";
    $query = mysqli_query($db, $sql);
    if($query) {
        header('location: index.php?status=sukses');
    } else {
        header('location: index.php?status=gagal');
    }
} else {
    die("Akses Dilarang...");
}
?>