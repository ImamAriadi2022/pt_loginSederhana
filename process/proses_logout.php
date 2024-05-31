<<<<<<< HEAD
<?php

require_once("../function/helper.php");
require_once("../function/koneksi.php");


session_start();
session_unset();
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['role']);

header("Location: ../index.php");
=======
<?php

require_once("../function/helper.php");
require_once("../function/koneksi.php");


session_start();
session_unset();
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['role']);

header("Location: ../index.php");
>>>>>>> 7b49e6eeb73941c00478887eaf7af8152bae9a2d
