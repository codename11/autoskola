<?php
define('MyConstx', TRUE);
include 'redirect.php';
define('MyConst1', TRUE);
define('MyConst2', TRUE);
include '../funkcije.php';
session_start(); //Pocinje sesija.
if(!isset($_SESSION['username']) && !isset($_SESSION['username'])){ //Ukoliko nema vrednost, onda se automatski redirektuje.
	header('Location: cover.php');
}

include 'Chead.php';
include 'cnav.php';
?>

<div class='container-fluid text-center'>

<form method='POST' class='vcenter' autocomplete='off' style='width: 100%'>
<p id="restext"></p>
	 <span  id='demox'></span>


<button name='xxx' id="vx" style="color: black;" class='btn btn-default podaci' onclick="sub_del(this.e)">Potvrdi brisanje</button>
<?php
include 'logout_btn.php';
?>
</form>
</div>

<div id="dmx"></div>
</body>
</html>