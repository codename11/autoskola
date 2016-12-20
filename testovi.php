<?php
define('MyConst1', TRUE);
include 'header.php';
include 'navbar.php';
?>

<div class="container">

	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<p class="alter-nas">Testovi:</p>
			<p class="alter-text text-warning">Dobro došli, dobri đaci !</p>
			<p class="alter-text">Na ovoj stranici imate program za vežbanje testova - novih ispitnih pitanja za polaganje za vozače AM, A1, A2,A, B, C i D kategorije, takodje možete skinuti i <a href="knjiga za voznju.pdf" class="lnk" target="_blank">knjigu za vožnju</a> i <a href="prva pomoc.pdf" class="lnk" target="_blank">prvu pomoć</a> u pdf formatu !!! Birajte:</p>
			<img src="images\autoskola.jpg" class="img-responsive img-rounded"></br>
			<div class="wrapper">
			<p class="wrp">Kategorije testova</p>
			<button class="btn btn-default btn-lg" onclick="opkat('testx1.php')" style="margin: 10px;">Test 1-B kategorija</button>
			<button class="btn btn-default btn-lg" onclick="opkat('testx2.php')" style="margin: 10px;">Test 2-B kategorija</button>
			<button class="btn btn-default btn-lg" onclick="opkat('testx3.php')" style="margin: 10px;">Test 3-B kategorija</button>
			<button class="btn btn-default btn-lg" onclick="opkat('testx4.php')" style="margin: 10px;">Test 4-B kategorija</button>
			<button class="btn btn-default btn-lg" onclick="opkat('testx5.php')" style="margin: 10px;">Test 5-B kategorija</button>
			<button class="btn btn-default btn-lg" onclick="opkat('testx6.php')" style="margin: 10px;">Test 6-C kategorija</button>
			<button class="btn btn-default btn-lg" onclick="opkat('saobracajni-znaci.php')" style="margin: 10px;">Poznavanje saobraćajnih znakova</button>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>

</div>

<?php include 'footer.php'; ?>
