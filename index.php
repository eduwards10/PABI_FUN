<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <link rel="shortcut icon" href="img/itdel.jpg">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
    <div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 15%;">
        <h3>Mata Kuliah</h3>
        <h1>IT Del</h1>
        <div class="row">
            <div class="col-md-6">
                <a href="form-daftar-matkul.php" class="btn btn-success">Tambah Mata Kuliah Baru </a>
            </div>
            <div class="col-md-6">
                <a href="list-mata-kuliah.php" class="btn btn-primary">List Mata Kuliah </a>
            </div>
        </div>
    </div>
    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Penambahan Mata Kuliah Baru Berhasil!";
            } else {
                echo "Penambahan Gagal";
            }
            ?>
        </p>
    <?php endif; ?>
</body>

</html>