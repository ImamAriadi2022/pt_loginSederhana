<<<<<<< HEAD
<?php
 require_once('function/helper.php');

 
 if ($_SESSION['role'] != 'admin') {
    header("Location: " . BASE_URL . 'dashboard-php?page-admin');
    exit();
 }
?>


<div class="card">
    <h1>halaman admin</h1>
=======
<?php
 require_once('function/helper.php');

 
 if ($_SESSION['role'] != 'admin') {
    header("Location: " . BASE_URL . 'dashboard-php?page-admin');
    exit();
 }
?>


<div class="card">
    <h1>halaman admin</h1>
>>>>>>> 7b49e6eeb73941c00478887eaf7af8152bae9a2d
</div>