<?php
    require_once("function/helper.php");
    require_once("function/koneksi.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/style01.css' ?>">
    
</head>
<body>
    <div class="topbar">
        <h3 class="text-topbar">Halaman pendaftaran</h3>
    </div>


    <div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Form Pendaftaran</div>
                <div class="card-body">
                    <form method="POST" action="<?= BASE_URL . 'process/process_login.php' ?>">
                    <label for="" class="form-label">Username</label><br>
                    <input type="username" name="username" class="form-input"><br>
                    <label for="" class="form-label">Password</label><br>
                    <input type="password" name="password" class="form-input"><br>
                    <button type="submit" name="daftar" class="btn-login">Daftar</button>
                    </form>
                </div>
                <p class="caption">Sudah Memiliki akun? <a href="<?= BASE_URL . 'index.php' ?>">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>

