<?php
define('MyConst1', TRUE);
include 'header.php';
include 'navbar.php';
?>

<div class="container con-nas">
  <div class="vcenter vcenter-txt">
	<p class="alter-nas">Online upis:</p>
	<p class="alter-text">Ovde možete izvršiti upis u našu školu, bez dolaska kod nas.</p>
	<p class="alter-text">Potrebno je samo da popunite dole navedeni formular sa podacima iz vaše lične karte,</br>a mi ćemo Vas kontaktirati u najkraćem mogućem roku na osnovu navedenih podataka!</p>
	<p class="alter-text text-danger">Polja označena zvezdicom (*) su obavezna!</p>
  </div>
  <form method="POST" class="vcenter" autocomplete="off" action="vers.php">
  
    <div class="form-group" style="padding-top: 10px;">
      <label for="usr1">Ime<span class="text-danger">*</span>:</label>
      <input type="text" class="form-control" name="ime" placeholder="Ime" id="usr1" required>
    </div>
	
	<div class="form-group">
      <label for="usr2">Prezime<span class="text-danger">*</span>:</label>
      <input type="text" class="form-control" name="prezime" placeholder="Prezime" id="usr2" required>
    </div>
	
	<div class="form-group">
      <label for="usr3">Ime jednog roditelja:</label>
      <input type="text" class="form-control" name="imerod" placeholder="Ime jednog roditelja" id="usr3">
    </div>
    
	<div class="form-group">
      <label for="usr4">Opština stanovanja<span class="text-danger">*</span>:</label>
      <input type="text" class="form-control" name="ops" placeholder="Opština stanovanja" id="usr4" required>
    </div>
	
	<div class="form-group">
      <label for="usr5">Adresa<span class="text-danger">*</span>:</label>
      <input type="text" class="form-control" name="adresa" placeholder="Adresa" id="usr5" required>
    </div>
	
	<div class="form-group">
      <label for="usr6">Mesto stanovanja<span class="text-danger">*</span>:</label>
      <input type="text" class="form-control" name="mesto" placeholder="Mesto stanovanja" id="usr6" required>
    </div>
	
	<div class="form-group">
      <label for="usr7">Kontakt tel.<span class="text-danger">*</span>:</label>
      <input type="text" class="form-control" name="tel1" placeholder="Kontakt tel." id="usr7" required>
    </div>
	
	<div class="form-group">
      <label for="usr8">Kontakt tel.2:</label>
      <input type="text" class="form-control" name="tel2" placeholder="Kontakt tel.2" id="usr8">
    </div>
	
	<div class="form-group">
      <label for="usr9">Datum rodjenja<span class="text-danger">*</span>:</label>
      <input type="text" class="form-control" name="datrod" placeholder="Datum rodjenja" id="usr9" required>
    </div>
	
	<div class="form-group">
      <label for="usr10">Opština rodjenja:</label>
      <input type="text" class="form-control" name="opsrod" placeholder="Opština rodjenja" id="usr10">
    </div>
	
	<div class="form-group">
      <label for="usr11">Mesto rodjenja:</label>
      <input type="text" class="form-control" name="mestorod" placeholder="Mesto rodjenja" id="usr11">
    </div>
	
	<div class="form-group">
      <label for="usr12">Matični broj-JMBG<span class="text-danger">*</span>:</label>
      <input type="text" class="form-control" name="jmbg" placeholder="Matični broj-JMBG" id="usr12" required>
    </div>
	
	<div class="form-group">
      <label for="usr13">Mesto izdavanja lične karte:</label>
      <input type="text" class="form-control" name="mstlk" placeholder="Mesto izdavanja lične karte" id="usr13">
    </div>
	
	<div class="form-group">
      <label for="usr14">Zanimanje:</label>
      <input type="text" class="form-control" name="poso" placeholder="Zanimanje" id="usr14">
    </div>
	
	<div class="form-group">
	<div class="radio">
	<p>Pol<span class="text-danger">*</span>:</p>
      <label for="usr15"><input type="radio" name="pol" value="muski" id="usr15" required>muški</label>
    </div>
	</div>
	
	<div class="form-group">
	<div class="radio">
      <label for="usr16"><input type="radio" name="pol" value="zenski" id="usr16" required>ženski</label>
    </div>
	</div>
	
	<div class="form-group">
      <label for="sel1">Prijava za kategoriju<span class="text-danger">*</span>:</label>
      <select class="form-control" name="kat" id="sel1">
        <option>AM</option>
        <option>A1</option>
        <option>A2</option>
        <option>A</option>
		<option>B</option>
        <option>C</option>
      </select>
	</div>
	
	<div class="form-group">
      <label for="comment">Napomena:</label>
      <textarea class="form-control" name="comm" rows="5" id="comment"></textarea>
    </div>
	<button type="submit" name="submit" class="btn btn-default">Pošalji</button>
	</form>
</div>

<?php include 'footer.php'; ?>
