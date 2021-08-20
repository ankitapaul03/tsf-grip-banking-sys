<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "Yahoo@0310";
$dbname = "banksys";


$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>
