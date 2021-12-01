<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    if (tambahsiswa($_POST)) {
        echo "
           <script>
           alert('data berhasil di tambah');
           document.location.href = 'tampildata.php';
           </script>
        ";
    } else {
        echo "
        <script>
        alert('data tidak berhasil di tambah');
        document.location.href = 'tampildata.php';
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah data siswa</title>
</head>

<body class="container">
    <br><br><br><br>

    <form action="" method="post">
        <legend style="text-align: center;font-weight: bold;">Tambah data siswa</legend>
        <div class="mb-3">
            <label for="Nis" class="form-label">Nis</label>
            <input type="text" id="Nis" name="Nis" class="form-control" placeholder="Nis">
        </div>
        <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama">
        </div>
        <div class="mb-3">
            <label for="Kelas" class="form-label">Kelas</label>
            <select id="Kelas" class="form-select" name="Kelas">
                <option>X</option>
                <option>XI</option>
                <option>XII</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Jurusan" class="form-label">Jurusan</label>
            <select id="Jurusan" class="form-select" name="Jurusan">
                <option>Teknik Komputer Jaringan</option>
                <option>Rekayasa Perangkat Lunak</option>
                <option>Multimedia</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <input type="text" id="Alamat" name="Alamat" class="form-control" placeholder="Alamat">
        </div>
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>