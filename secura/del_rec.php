<?php
define('MyConst2', TRUE);
include '../funkcije.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skola";
$sql = $_GET['query'];


pristup($servername, $username, $password, $dbname, $sql);


?>