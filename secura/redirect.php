
<?php
if(!defined('MyConstx')) {
   die('Direct access not permitted');
}
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skola";
$sql= "SET @count = 0; UPDATE `kandidat` SET `kandidat`.`id` = @count:= @count + 1";
$conn=new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
	
		die("Neuspela konekcija: ".$conn->connect_error);
	
	}
	
	mysqli_multi_query($conn,$sql);
	
	$conn->close();	
	
?>