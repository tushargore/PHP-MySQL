<?php
$host=("localhost");
$user=("root");
$password=("");
$dbname=("mydb");
$con=mysql_connect($host,$user,$password);

mysql_select_db($dbname,$con) or die("Unable To connect with DataBase");
?>