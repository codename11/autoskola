<?php
define('MyConst1', TRUE);
include 'header.php';
include 'navbar.php';
?>

<div class="container con-nas alt-con">

	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<p class="alter-nas">C kategorija</p>
			<p class="alter-text">C - je kategorija podrazumeva dozvolu za upravljanje vozilom čije je najveća masa veća od 3.500 kg.</p>
			<p class="alter-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam commodo sem id odio sollicitudin imperdiet.</br>Ut sodales ornare eros, eget venenatis purus scelerisque ac. Curabitur at sem luctus, pulvinar est in, sollicitudin ex.</br>Etiam vehicula imperdiet blandit. Fusce ac ex scelerisque, sodales sapien quis, eleifend dui. Curabitur risus quam,</br>consequat vitae nisi ac, volutpat tincidunt nibh. Donec ac vehicula velit. Sed dignissim feugiat nisi, nec rutrum</br>dolor fermentum eget. Aenean risus tortor, pharetra eu tincidunt et, tincidunt maximus elit.</p>
			<p class="alter-nas">Potrebni uslovi za sticanje dozvole C kategorije:</p>
			
			<p class="alter-text">
				<ul style="list-style-type:square">
					<li>Za upis i početak obuke kandidat mora imati 20 godina starosti.</li>
					<li>Potrebna je važeća lična karta i vozačka dozvola B kategorije.</li>
					<li>Kandidat sluša teorijsku obuku sa fondom od 7 časova(5 časa predavanja i 2 časa vežbi).</li>
					<li>Nakon završene teorijske obuke polaže teorijski deo ispita.</li>
					<li>Nakon položenog testa kandidat obavlja lekarski pregled za vozača C kategorije.</li>
					<li>Vrši praktičnu obuku od 15 časova.</li>
					<li>Zatim polaže praktični deo ispita, ali mora imati navršenu 21 godinu.</li>
				</ul>
			</p>
			
		</div>
		<div class="col-sm-2">
		</div>
	</div>

	
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8 text-center">
			<img src="images/big_rig.jpg" class="ap-left" alt="slika">
			<img src="images/big_rig1.jpg" class="ap-right" alt="slika">
		</div>

		<div class="col-sm-2">
		</div>
	
	</div>
	
	
</div>

<div class="container">
  <h2 class="text-center text-uppercase text-primary" style="padding-bottom: 20px; padding-top: 20px; font-family:Palatino Linotype;">Cenovnik B kategorije</h2>
  <div class="table-responsive">
  <table class="table table-striped table-hover table-bordered" style="font-family:Palatino Linotype;">
    <thead>
      <tr>
        <th>C Kategorija-Ako kandidat ima B ili B i BE kategoriju.</th>
		<th>Cena</th>
		<th>C Kategorija-Ako kandidat ima C1 ili C1 i C1</th>
		<th>Cena</th>
		
        	
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Teorijska obuka - 7 časova (5+2)</td>
        <td>2.345,00</td>
        <td>Teorijska obuka - nema</td>
		<td> / </td>

      </tr>
      <tr>
        <td>Praktična obuka - 15 časova </td>
        <td>22.500,00</td>
        <td>Praktična obuka - 7 časova </td>
		<td>12.600,00</td>
		
		
      </tr>
      
    </tbody>
  </table>
  </div>
  
</div>

<?php include 'footer.php'; ?>
