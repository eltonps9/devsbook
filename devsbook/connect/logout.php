<?php
session_start();

$_SESSION['token'] = "";
session_destroy();
session_unset();
$_SESSION['error']="";
header("Location:./login.php");
?>