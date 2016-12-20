<?php

if(!isset($_SESSION['username'])){
	header('Location: cover.php');
}
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    
header ("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
header ("Cache-Control: no-cache, must-revalidate");  
header ("Pragma: no-cache");
session_start();
unset($_SESSION['username']);//Ovo i nije neophodno ... Medjutim mora biti ovo ili ovo ispod njega session_destroy(); .. A mogu i biti oba, ne skodi ...
session_destroy(); //Ovo i nije neophodno ...
session_write_close(); //Ovo i nije neophodno ...
exit(); //Ovo i nije neophodno ...
/*

Dakle mora biti jedno od ova dva unset ($_SESSION['username']); ili session_destroy();  ili oba sto ne skodi ..

*/

?>