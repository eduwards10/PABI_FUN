<?php
include("config.php");

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $matkul_id = $_POST['matkul_id'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $semester = $_POST['semester'];
    $nama_dosen = $_POST['nama_dosen'];
    $nama_asdos = $_POST['nama_asisten_dosen'];
    $no_hp_dosen = $_POST['no_handphone_dosen'];
    $no_hp_asdos = $_POST['no_handphone_asisten_dosen'];

    $sql = "UPDATE daftar_matkul SET matkul_id='$matkul_id', mata_kuliah='$mata_kuliah', semester='$semester', nama_dosen='$nama_dosen', nama_asisten_dosen='$nama_asdos', no_handphone_dosen='$no_hp_dosen', no_handphone_asisten_dosen='$no_hp_asdos' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('location:list-mata-kuliah.php');
    } else {
        die("Gagal Menyimpan Perubahan...");
    }
} else {
    die("Akses Dilarang...");
}
?>