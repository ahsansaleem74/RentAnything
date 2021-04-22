

<?php

include "configure.php";


session_start();


session_unset();

session_destroy();

 echo "<script> window.location.assign('signin.php') </script>";
exit();




?>