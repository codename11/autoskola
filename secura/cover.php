<?php
define('MyConst3', TRUE);
define('MyConstx', TRUE);
include 'redirect.php';
define('MyConst1', TRUE);
define('MyConst2', TRUE);
include '../funkcije.php';

//Startuje se sesija
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
	$user=$_POST["username"];
	$password=$_POST["password"];
	
	$_SESSION['username'] = $user; //Ovde se dodeljuje promenljivoj vrednost, koja ukoliko je ima, ukazuje da je ulogovan korisnik. Ukoliko nema vrednost, onda se logout.php-u unistava sesija.
	$_SESSION['password'] = $password;
	$result=pristup("localhost", "root", "", "skola", "SELECT * FROM kod WHERE username='$user' AND password='$password'");
	
	if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
		header("Location: raport.php");
    }
} else {
    echo "Pogresna sifra ili username";
}
	

}

?>
<?php include 'Chead.php'; ?>

<form method="POST" class="vcenter" autocomplete="off" action="<?php echo test_input($_SERVER["PHP_SELF"]);?>">
  <?php

		if(isset($_SESSION['username'])){
			echo "<p class='podaci' style='color: black;'>Trenutno ulogovani korisnik: [<span class='text-danger'>";
			print_r($_SESSION['username']);
			echo "</span>]</p>";
		}
		else{
			echo "<p class='podaci' style='color: black;'>Trenutno niko nije ulogovan.</p>";
		}
			
?>
    <div class="form-group" style="padding-top: 10px;">
      <label>Username<span class="text-danger">*</span>:</label>
      <input type="text" class="form-control" name="username" placeholder="username" id="username" required>
    </div>
	
	<div class="form-group">
      <label>Password<span class="text-danger">*</span>:</label>
      <input type="password" class="form-control" name="password" placeholder="password" id="password" required>
    </div>
<button type="submit" style="color: black;" class="btn btn-default podaci">Log in</button>
<?php
include 'logout_btn.php';
?>
</form>
</body>
</html>
