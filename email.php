<?php
require '..\funkcije.php';
$to = test_input("veljkos82@gmail.com"); //Promeniti na mejl autoskole OBAVEZNO!!!
$subject = test_input($_POST['name']);
$content= test_input($_POST['comments']);
$ml=test_input($_POST['email']);
$headers = test_input("From:$ml\r\n");

if(mail($to,$subject,$content,$headers)){
	echo "Poruka je poslata ...";
	header('Location: index.php'); 
}
else{
	echo "Poruka nije poslata.";
	header('Location: index.php');
}
?>