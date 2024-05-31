<<<<<<< HEAD
<?php

require_once("../function/helper.php");
require_once("../function/koneksi.php");


//menangkap request user
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

//mengecek pengguna
if (mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_array($query);

    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['role'] = $row['role'];
    if ($row['role'] == 'admin') {
        header("location: " . BASE_URL . 'dashboard.php?page-admin');
    } else if ($row['role'] == 'user'){
        header("location: " . BASE_URL . 'dashboard.php?page-user');
    }
} else {
    header("location: " . BASE_URL);
}
=======
<?php

require_once("../function/helper.php");
require_once("../function/koneksi.php");


//menangkap request user
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

//mengecek pengguna
if (mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_array($query);

    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['role'] = $row['role'];
    if ($row['role'] == 'admin') {
        header("location: " . BASE_URL . 'dashboard.php?page-admin');
    } else if ($row['role'] == 'user'){
        header("location: " . BASE_URL . 'dashboard.php?page-user');
    }
} else {
    header("location: " . BASE_URL);
}
>>>>>>> 7b49e6eeb73941c00478887eaf7af8152bae9a2d
