<?php

$con = mysqli_connect('localhost','root','','jsondb');

$jsonCont = file_get_contents('mataKuliahku.json');

$data = json_decode($jsonCont, true);

$array_data = $data['Semester1'];

foreach ($array_data as $row) {
    $query = "INSERT INTO daftar_matkul (matkul_id, mata_kuliah, semester, nama_dosen, nama_asisten_dosen, no_handphone_dosen, no_handphone_asisten_dosen)
              VALUES ('" . $row["matkul_id"] . "', '" . $row["mata_kuliah"] . "', '" . $row["semester"] . "', '" . $row["nama_dosen"] . "', '" . $row["nama_asisten_dosen"] . "', '" . $row["no_handphone_dosen"] . "', '" . $row["no_handphone_asisten_dosen"] . "')";
    $con->query($query);
}
    $con->close();
    echo "Data Inserted Successfully!";

?>