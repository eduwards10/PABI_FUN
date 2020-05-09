<?php
$db = new Mysqli('localhost','root','','jsondb');

$query = $db->query('SELECT * FROM daftar_matkul');

if($db->connect_error) {
    echo "Failed to coneect to MySQL:" . $db->connect_error;
    exit();
}

$system = array();
$system['Semester1'] = array();

while ($row = mysqli_fetch_assoc($query)) {
    $data['matkul_id'] = $row["matkul_id"];
    $data['mata_kuliah'] = $row["mata_kuliah"];
    $data['semester'] = $row["semester"];
    $data['nama_dosen'] = $row["nama_dosen"];
    $data['nama_asisten_dosen'] = $row["nama_asisten_dosen"];
    $data['no_handphone_dosen'] = $row["no_handphone_dosen"];
    $data['no_handphone_asisten_dosen'] = $row["no_handphone_asisten_dosen"];
    array_push($system['Semester1'], $data);
}

$fp = fopen('yangSudahKulalui.json', 'w');

if(!fwrite ($fp, json_encode($system))) {
    die('Error : File Not Opened. ' . mysql_error());
} else {
    echo "Data Retrieved Successfully!!!";
}
fclose($fp);
$db->close();
?>