<?php
define('MyConst1', TRUE);

session_start(); //Pocinje sesija.
if(!isset($_SESSION['username']) && !isset($_SESSION['username'])){ //Ukoliko nema vrednost, onda se automatski redirektuje.
	header('Location: cover.php');
}
include 'Chead.php';
include 'cnav.php';
?>


<div class="container con-nas">
<div class="row">
<div class="col-sm-6">
  <div class="vcenter vcenter-txt">
	<p class="alter-nas">Modifikacija strane novosti:</p>
	<p class="alter-text">Ovde možete uneti sadržaj koji će se pojaviti na strani novosti.</p>
	
  </div>
  
	<form method="POST" class="vcenter" autocomplete="off" action="">
	<div class="form-group">
		<label for="comment">Sadržaj:</label></br>
		<button type="button" id="t2" class="btn btn-default btn-xs" onclick="nasvol()">naslov</button>
		<button type="button" id="t1" class="btn btn-default btn-xs" onclick="tagP()">paragraf</button>
      <textarea class="form-control" name="comm" rows="6" id="comment" onkeyup="showHint(this.value)"></textarea>
    </div>
	<button type="xcx" name="submit" class="btn btn-default" onclick="loadDoc()">Pošalji</button>
		<?php include 'logout_btn.php';?>
	</form>
</div></br>
<h3>Preview strane:</h3>
<div class="col-sm-6 bord" id="port"><?php include 'window.php'; ?></div>
</div>

</div>

</body>
</html>