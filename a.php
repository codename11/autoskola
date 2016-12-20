<?php
define('MyConst1', TRUE);
include 'header.php';
include 'navbar.php';
?>

<div class="container con-nas">

	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<p class="alter-nas">A kategorija</p>
			<p class="alter-text">A - Kategorija je kategorija za upravljanje motociklima i teškim triciklima čija snaga prelazi 35 kW. Obuka se može</br>započeti sa navršene 23 godine (polaganje vožnje sa 24 godine) i sastoji se iz teorijskog i praktičnog dela sa fondom</br>časova u zavisnosti od kategorije koju kandidat već poseduje (videti na stranici CENOVNIK).</p>
			<p class="alter-text">Ukoliko neko poseduje A2 kategoriju minimum 2 godine može polagati za A kategoriju i pre navršenih 24 godine.</br>Ispit se sastoji iz teorijskog i praktičnog dela.</p>
			<p class="alter-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod tincidunt libero vitae placerat. Vestibulum</br>ut feugiat felis. Aliquam vel diam odio. Suspendisse luctus semper ipsum, sit amet egestas ligula venenatis eget.</br>Duis non consequat elit.</p>
		</div>
		<div class="col-sm-2">
		</div>
	</div>

	
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8 text-center">
			<img src="images/tiny_big_bike.jpg" class="ap-left" alt="slika">
			<img src="images/tiny_big_bike1.jpg" class="ap-right" alt="slika">
		</div>

		<div class="col-sm-2">
		</div>
	
	</div>
	
	
</div>

<div class="container">
  <h2 class="text-center text-uppercase text-primary" style="padding-bottom: 20px; padding-top: 20px; font-family:Palatino Linotype;">Cenovnik A kategorije</h2>
  <div class="table-responsive">
  <table class="table table-striped table-hover table-bordered" style="font-family:Palatino Linotype;">
    <thead>
      <tr>
        <th>A Kategorija-Ako kandidat ne poseduje vozačku dozvolu.</th>
		<th>Cena</th>
		<th>A Kategorija-Ako kandidat ima AM kategoriju(dobijaju vozači koji su "B" kat. položili pre 2011.-promenom obrasca)!</th>
		<th>Cena</th>
		<th>A Kategorija-Ako kandidat ima A1 kategoriju</th>
        <th>Cena</th>
		<th>A Kategorija-Ako kandidat ima A2 kategoriju</th>
        <th>Cena</th>
        <th>A Kategorija-Ako kandidat ima neku od kategorija: B1,B,BE,C1,C1E,C,CE,D1,D1E,D,DE,F,M (stečene nakon 2011.)</th>
        <th>Cena</th>
		
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Teorijska obuka - 40 časova (30+10)</td>
        <td>11.080,00</td>
        <td>Teorijska obuka - nema</td>
		<td> / </td>
		<td>Teorijska obuka - nema</td>
		<td> / </td>
		<td>Teorijska obuka - 7 časova (5+2)</td>
		<td> 2.345,00 </td>
		<td>Teorijska obuka - 7 časova (5+2)</td>
		<td> 2.345,00 </td>
      </tr>
      <tr>
        <td>Praktična obuka - 40 časova</td>
        <td>40.000,00</td>
        <td>Praktična obuka - 20 časova</td>
		<td>20.000,00</td>
		<td>Praktična obuka - 14 časova</td>
		<td>14.000,00</td>
		<td>Praktična obuka - 30 časova</td>
		<td>30.000,00</td>
		<td>Praktična obuka - 40 časova</td>
		<td>40.000,00</td>
      </tr>
      
    </tbody>
  </table>
  </div>
  
</div>

<?php include 'footer.php'; ?>
