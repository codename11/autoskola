<?php
define('MyConst2', TRUE);
?>
<?php
require 'funkcije.php';

// define variables and set to empty values
$ime=proverai($_POST["ime"]);
$prezime=proverai($_POST["prezime"]);
$imerod=proverai($_POST["imerod"]); //ime roditelja
$ops=proverai($_POST["ops"]); //opstina stanovanja
$adresa=proverai($_POST["adresa"]);
$mesto=proverai($_POST["mesto"]); //mesto stanovanja
$tel1=proverab($_POST["tel1"]); //kontakt tel.1
$tel2=proverab($_POST["tel2"]); //kontakt tel.2
$datrod=proverab($_POST["datrod"]); //datum rodjenja
$opsrod=proverai($_POST["opsrod"]); //opstina rodjenja
$mestorod=proverai($_POST["mestorod"]); //mesto rodjenja
$jmbg=proverab($_POST["jmbg"]);
$mstlk=proverai($_POST["mstlk"]); // mesto izdavanja licne karte
$poso=proverai($_POST["poso"]); // zanimanje
$pol=$_POST["pol"];
$kat=$_POST["kat"]; // izabrana kategorija
$comm=$_POST["comm"]; // komentar


if (isset($ime) && isset($prezime) && isset($ops) && isset($adresa) && isset($mesto) && isset($tel1) && isset($datrod) && isset($jmbg) && isset($pol) && isset($kat) && isset($comm)){

$servername="localhost"; //ime/adresa/url servera
$username="root"; // ime korisnika koji pristupa serveru
$password=""; // pass za server
$dbname="skola"; // ime bazu u kojoj se vrsi upit
$sql="INSERT INTO kandidat (Ime, Prezime, Ime_roditelja, Opstina_stanovanja, Adresa, Mesto_stanovanja, Tel1, Tel2, Datum_rodjenja, Opstina_rodjenja, Mesto_rodjenja, JMBG, Mesto_izdavanja_licne_karte, Zanimanje, Pol, Kategorija, Poruka) VALUES ('$ime', '$prezime', '$imerod', '$ops', '$adresa', '$mesto', '$tel1', '$tel2', '$datrod', '$opsrod','$mestorod', '$jmbg', '$mstlk', '$poso', '$pol', '$kat', '$comm')"; // primer upita

pristup($servername, $username, $password, $dbname, $sql);

header('Location: online_upis.php'); 

}
else{
header('Location: online_upis.php'); 	
}

?>