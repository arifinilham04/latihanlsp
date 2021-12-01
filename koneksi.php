<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_latihanlsparifin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";

function tambahsiswa($data)
{
    global $conn;
    $Nis = htmlspecialchars($data['Nis']);
    $Nama = htmlspecialchars($data['Nama']);
    $Kelas = htmlspecialchars($data['Kelas']);
    $Jurusan = htmlspecialchars($data['Jurusan']);
    $Alamat = htmlspecialchars($data['Alamat']);

    $query = "INSERT INTO siswa_tbl VALUE ('','$Nis','$Nama','$Kelas','$Jurusan','$Alamat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($data)
{
    global $conn;
    $query = "delete from siswa_tbl where ID=$data";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;
    $id = $_GET['id'];
    $Nis = htmlspecialchars($data['Nis']);
    $Nama = htmlspecialchars($data['Nama']);
    $Kelas = htmlspecialchars($data['Kelas']);
    $Jurusan = htmlspecialchars($data['Jurusan']);
    $Alamat = htmlspecialchars($data['Alamat']);

    $query = "UPDATE siswa_tbl
    SET Nis = '$Nis',Nama = '$Nama', Kelas = '$Kelas', Jurusan = '$Jurusan', Alamat = '$Alamat'
    WHERE ID = '$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function login($data)
{
    global $conn;
    $username = $data['username'];
    $password = $data['password'];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    
    if (mysqli_num_rows($query) === 1) {
        $result = mysqli_fetch_assoc($query);
        if (password_verify($password, $result['password'])) {
            $_SESSION['submit'] = true;
        }
    }
    return $_SESSION;
}
function register($data)
{
    global $conn;
    $username = $data['username'];
    $password = $data['password'];
    $password1 =  $data['password1'];

    if ($password1 != $password) {
        echo
        "<script>
        alert('password tidak sesuai');
        document.location.href = 'register.php';
        </script>
        ";
        exit;
    }
    $andcrip = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "insert into user value('','$username','$andcrip')");
    return mysqli_affected_rows($conn);
}
