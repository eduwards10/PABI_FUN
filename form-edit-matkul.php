<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('location: list-mata-kuliah.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM daftar_matkul WHERE id=$id";
$query = mysqli_query($db, $sql);
$matkul = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <link rel="shortcut icon" href="img/itdel.jpg">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
    <header>
        <h3 class="jumbotron text-center">Edit Mata Kuliah</h3>
    </header>

    <div class="container">
        <form action="proses-edit.php" style="padding-left: 25%;" method="POST">

            <fieldset>

                <input type="hidden" name="id" value="<?php echo $matkul['id'] ?>" />

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="matkul_id">Kode Mata Kuliah : </label>
                        <input type="text" class="form-control" name="matkul_id" placeholder="Kode Mata Kuliah" value="<?php echo $matkul['matkul_id'] ?>" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="mata_kuliah">Mata Kuliah : </label>
                        <input type="text" class="form-control" name="mata_kuliah" placeholder="Nama Mata Kuliah" value="<?php echo $matkul['mata_kuliah'] ?>" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="semester">Semester : </label>
                        <?php $semester = $matkul['semester']; ?>
                        <select name="semester" class="form-control">
                            <option>Pilih Salah Satu --</option>
                            <option value="1" <?php echo ($semester == '1') ? "selected" : "" ?>>Semester 1</option>
                            <option value="2" <?php echo ($semester == '2') ? "selected" : "" ?>>Semester 2</option>
                            <option value="3" <?php echo ($semester == '3') ? "selected" : "" ?>>Semester 3</option>
                            <option value="4" <?php echo ($semester == '4') ? "selected" : "" ?>>Semester 4</option>
                            <option value="5" <?php echo ($semester == '5') ? "selected" : "" ?>>Semester 5</option>
                            <option value="6" <?php echo ($semester == '6') ? "selected" : "" ?>>Semester 6</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="nama_dosen">Nama Dosen : </label>
                        <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen" value="<?php echo $matkul['nama_dosen'] ?>" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="nama_asisten_dosen">Nama Asisten Dosen : </label>
                        <input type="text" class="form-control" name="nama_asisten_dosen" placeholder="Nama Asisten Dosen" value="<?php echo $matkul['nama_asisten_dosen'] ?>" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="no_handphone_dosen">No Handphone Dosen : </label>
                        <input type="text" class="form-control" name="no_handphone_dosen" placeholder="No Handphone Dosen" value="<?php echo $matkul['no_handphone_dosen'] ?>" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="no_handphone_asisten_dosen">No Handphone Asisten Dosen : </label>
                        <input type="text" class="form-control" name="no_handphone_asisten_dosen" placeholder="No Handphone Asisten Dosen" value="<?php echo $matkul['no_handphone_asisten_dosen'] ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan" name="simpan" />
                </div>

            </fieldset>

        </form>

    </div>
</body>

</html>