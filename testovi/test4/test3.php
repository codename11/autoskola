<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">3. Putnički automobil obilazi autobus na mestu gde mu je to:</p></br>
				<img src="images\test\test32.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-remove s3 hider"></span><label class="radio-inline"><input type="radio" id="mx3" name="quest3">a)</label>
				<p class="par">zabranjeno pravilima saobraćaja</p></br>
				<span class="glyphicon glyphicon-ok s3 hider"></span><label class="radio-inline"><input type="radio" id="m3" name="quest3">b)</label>
				<p class="par">dozvoljeno, ali je dužan da se kreće smanjenom brzinom i ne ugrožava putnike koji ulaze ili izlaze iz autobusa</p></br>
				<span class="glyphicon glyphicon-remove s3 hider"></span><label class="radio-inline"><input type="radio" id="my3" name="quest3">c)</label>
				<p class="par">zabranjeno oznakama na kolovozu</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m3').change(function(){

	$(".s3").removeClass("hider");
	$('input[name="quest3"]').attr('disabled', 'disabled');

});

$('input#mx3').change(function(){

	$(".s3").removeClass("hider");
	$('input[name="quest3"]').attr('disabled', 'disabled');

});

$('input#my3').change(function(){

	$(".s3").removeClass("hider");
	$('input[name="quest3"]').attr('disabled', 'disabled');

});

</script>