<<<<<<< HEAD
<?php
 require_once('function/helper.php');

 
 if ($_SESSION['role'] != 'user') {
    header("Location: " . BASE_URL . 'dashboard-php?page-user');
    exit();
 }
?>

<div class="class">
    <h1>halaman user</h1>
=======
<?php
 require_once('function/helper.php');

 
 if ($_SESSION['role'] != 'user') {
    header("Location: " . BASE_URL . 'dashboard-php?page-user');
    exit();
 }
?>

<div class="class">
    <h1>halaman user</h1>
>>>>>>> 7b49e6eeb73941c00478887eaf7af8152bae9a2d
</div>