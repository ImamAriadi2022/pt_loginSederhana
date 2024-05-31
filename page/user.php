<?php
 require_once('function/helper.php');

 
 if ($_SESSION['role'] != 'user') {
    header("Location: " . BASE_URL . 'dashboard-php?page-user');
    exit();
 }
?>

<div class="class">
    <h1>halaman user</h1>
</div>