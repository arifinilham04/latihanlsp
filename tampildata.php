<?php
session_start();
if (!isset($_SESSION['submit'])) {
    header('location: login.php');
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

    <title>Hello, world!</title>
</head>

<body class="container">
    <h1 style="text-align: center;">Data Siswa</h1>
    <a href="tambah.php" class="btn btn-danger btn-sm">tambah siswa</a>
    <br><br>
    <table class="table table-dark table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM siswa_tbl");
        while ($siswa = mysqli_fetch_array($data)) { ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $siswa['Nis'] ?></td>
                <td><?php echo $siswa['Nama'] ?></td>
                <td><?php echo $siswa['Kelas'] ?></td>
                <td><?php echo $siswa['Jurusan'] ?></td>
                <td><?php echo $siswa['Alamat'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $siswa['ID']; ?>" class="btn btn-info">edit</a>
                    <a href="hapus.php?id=<?php echo $siswa['ID']; ?>" class="btn btn-danger">hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

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