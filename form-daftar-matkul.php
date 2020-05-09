<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Mata Kuliah Baru | IT Del</title>
    <link rel="shortcut icon" href="img/itdel.jpg">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
    <header>
        <h3 class="jumbotron text-center">Formulir Penambahan Mata Kuliah Baru</h3>
    </header>

    <div class="container">
        <form action="proses-penambahan.php" style="padding-left: 25%;" method="POST">

            <fieldset>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="matkul_id">Kode Mata Kuliah : </label>
                        <input type="text" class="form-control" name="matkul_id" placeholder="Kode Mata Kuliah" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="mata_kuliah">Mata Kuliah : </label>
                        <input type="text" class="form-control" name="mata_kuliah" placeholder="Nama Mata Kuliah" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="semester">Semester : </label>
                        <select name="semester" class="form-control">
                            <option value="">Pilih Salah Satu --</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="3">Semester 3</option>
                            <option value="4">Semester 4</option>
                            <option value="5">Semester 5</option>
                            <option value="6">Semester 6</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="nama_dosen">Nama Dosen : </label>
                        <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="nama_asisten_dosen">Nama Asisten Dosen : </label>
                        <input type="text" class="form-control" name="nama_asisten_dosen" placeholder="Nama Asisten Dosen" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="no_handphone_dosen">No Handphone Dosen : </label>
                        <input type="text" class="form-control" name="no_handphone_dosen" placeholder="No Handphone Dosen" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="no_handphone_asisten_dosen">No Handphone Asisten Dosen : </label>
                        <input type="text" class="form-control" name="no_handphone_asisten_dosen" placeholder="No Handphone Asisten Dosen" />
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Daftar" name="daftar" />
                </div>

            </fieldset>

        </form>

    </div>

</body>

</html>