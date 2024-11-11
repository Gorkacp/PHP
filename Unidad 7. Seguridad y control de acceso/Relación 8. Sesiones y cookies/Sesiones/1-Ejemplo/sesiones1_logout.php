<?php 
session_start();
session_unset();
session_destroy();
setcookie(session_name(), 123, time() - 10000);
header("location: sesiones1_login.php");



?>