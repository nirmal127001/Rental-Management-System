<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$database='student'
mysqli_connect($mysql_host,$mysql_user,$mysql_password,$database);

echo 'Connected';
?>