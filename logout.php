<?php
session_start();
$_SESSION_UNSET["loginState"];
session_destroy();
header("location:index.php");
 ?>