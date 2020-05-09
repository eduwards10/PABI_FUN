<?php
require("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mata Kuliah</title>
    <link rel="shortcut icon" href="img/itdel.jpg">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
    <header>
        <h3 class="jumbotron text-center">Mata Kuliah yang Sudah Ditambahkan</h3>
    </header>

    <nav class="text-center">
        <a href="form-daftar-matkul.php" class="btn btn-success"> [+] Tambah Baru</a>
    </nav>
    <br>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Mata Kuliah</th>
                    <th>Semester</th>
                    <th>Nama Dosen</th>
                    <th>Nama Asisten Dosen</th>
                    <th>No. Handphone Dosen</th>
                    <th>No. Handphone Asisten Dosen</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM daftar_matkul";
                $query = mysqli_query($db, $sql);
                while ($matkul = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $matkul['id'] . "</td>";
                    echo "<td>" . $matkul['matkul_id'] . "</td>";
                    echo "<td>" . $matkul['mata_kuliah'] . "</td>";
                    echo "<td>" . $matkul['semester'] . "</td>";
                    echo "<td>" . $matkul['nama_dosen'] . "</td>";
                    echo "<td>" . $matkul['nama_asisten_dosen'] . "</td>";
                    echo "<td>" . $matkul['no_handphone_dosen'] . "</td>";
                    echo "<td>" . $matkul['no_handphone_asisten_dosen'] . "</td>";
                    echo "<td>";
                    echo "<a href = 'form-edit-matkul.php?id=" . $matkul['id'] . "' class='btn btn-info'>Edit</a> | ";
                    echo "<a href = 'hapus.php?id=" . $matkul['id'] . "' class='btn btn-danger'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <p> Total :
        <?php
        echo mysqli_num_rows($query)
        ?>
</body>

</html>