<?php

session_start();
$_SESSION['email']="";
session_destroy();
header("Location: index.php")

?>