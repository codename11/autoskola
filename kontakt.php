<?php
define('MyConst1', TRUE);
include 'header.php';
include 'navbar.php';
?>

<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<p class="alter-nas">Kontakt:</p>
			<p class="alter-text">Kontakt telefon:<span class="text-warning">026-357-007</span></p>
			<p class="alter-text">E-mail:<span class="text-warning">mojemail@gmail.com</span></p>
			<p class="alter-text">Kontakt telefon van radnog vremena, nedeljom i praznicima: <span class="glyphicon glyphicon-phone text-warning">064-187-123</span></p>
			<p class="alter-text">Naša lokacija(google maps):</p>
			<div id="mapa" onload="initMap()"></div>
			<script>
				function initMap() {
					var uluru = {lat: 44.642066, lng: 20.953824};
					var map = new google.maps.Map(document.getElementById('mapa'), {
						zoom: 14,
						center: uluru
					});
					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrZw9uMXltRMt9NROj1EJTs571E0RDQMc&callback=initMap"></script>

		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

<?php include 'footer.php'; ?>
