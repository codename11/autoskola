<?php
define('MyConstx', TRUE);
include 'redirect.php';
define('MyConst1', TRUE);
define('MyConst2', TRUE);
include '../funkcije.php';
header("Cache-Control: no-cache, must-revalidate");
session_start(); //Pocinje sesija.
if(!isset($_SESSION['username'])){ //Ukoliko nema vrednost, onda se automatski redirektuje.
	header('Location: cover.php');
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skola";
$sql="SELECT id, Ime, Prezime, Ime_roditelja, Opstina_stanovanja, Adresa, Mesto_stanovanja, Tel1, Tel2, Datum_rodjenja,  Opstina_rodjenja, Mesto_rodjenja, JMBG, Mesto_izdavanja_licne_karte, Zanimanje, Pol, Kategorija, Poruka

FROM kandidat
";


	$br=0;
	$br1=0;
	$result = pristup($servername, $username, $password, $dbname, $sql);
	$len = 0;
	
	$rejl1 = "<div class='table-responsive podaci'>
	<table class='table table-hover table-bordered'>
		<thead>
			<tr>
				<th>Izaberite:</th>
				<th>Id</th>
				<th>Ime</th>
				<th>Prezime</th>
				<th>Ime jednog roditelja</th>
				<th>Opština stanovanja</th>
				<th>Adresa</th>
				<th>Mesto stanovanja</th>
				<th>Kontakt tel.1</th>
				<th>Kontakt tel.2</th>
				<th>Datum rodjenja</th>
				<th>Opština rodjenja</th>
				<th>Mesto rodjenja</th>
				<th>Matični broj-JMBG</th>
				<th>Mesto izdavanja lične karte</th>
				<th>Zanimanje</th><th>Pol</th>
				<th>Prijava za kategoriju</th>
				<th>Poruka</th>
			</tr>
		</thead><tbody>
		";
	
	if(isset($_SESSION['username'])){
			echo "<p class='podaci' style='color: black;'>Trenutno ulogovani korisnik: [<span class='text-danger'>";
			print_r($_SESSION['username']);
			echo "</span>]</p>";
		}
		else{
			echo "<p class='podaci' style='color: black;'>Trenutno niko nije ulogovan.</p>";
		}

	echo $rejl1;
	if ($result->num_rows > 0) {
    
	while($row = $result->fetch_assoc()) {
		$br=$row["id"];
		$br1++;
		//onclick='get_id(this.id)'
		$rejl2 = "<tr class='podaci brew' id='$br' style='font-weight: normal;'><td><div class='checkbox' ><label><input type='checkbox' class='bx' id='$br' name='jnejm[$br]' value='$br' >Obriši</label></div></td>";
		
		$rejl3 = "<td>".$row["id"]."</td>"."<td>".$row["Ime"]."</td>"."<td>".$row["Prezime"]."</td>"."<td>".$row["Ime_roditelja"]."</td>"."<td>".$row["Opstina_stanovanja"]."</td>"."<td>".$row["Adresa"]."</td>"."<td>".$row["Mesto_stanovanja"]."</td>"."<td>".$row["Tel1"]."</td>"."<td>".$row["Tel2"]."</td>"."<td>".$row["Datum_rodjenja"]."</td>"."<td>".$row["Opstina_rodjenja"]."</td>"."<td>".$row["Mesto_rodjenja"]."</td>"."<td>".$row["JMBG"]."</td>"."<td>".$row["Mesto_izdavanja_licne_karte"]."</td>"."<td>".$row["Zanimanje"]."</td>"."<td>".$row["Pol"]."</td>"."<td>".$row["Kategorija"]."</td>"."<td>".$row["Poruka"]."</td></tr>";
		
		echo $rejl2;
		echo $rejl3;
		
		}
		wcho "</tbody>";
	}
	else {
     echo "0 results";
}
	echo "</div></table>";
	
?>