<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">5. Putnički automobil pretiče kombi vozilo na mestu gde je preticanje:</p></br>
				<img src="images\test\test13.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-remove s5 hider"></span><label class="radio-inline"><input type="radio" id="mx5" name="quest5">a)</label>
				<p class="par">dozvoljeno</p></br>
				<span class="glyphicon glyphicon-ok s5 hider"></span><label class="radio-inline"><input type="radio" id="m5" name="quest5">b)</label>
				<p class="par">zabranjeno</p></br>
				<span class="glyphicon glyphicon-remove s5 hider"></span><label class="radio-inline"><input type="radio" id="my5" name="quest5">c)</label>
				<p class="par">dozvoljeno, jer je preticanje započeto kada je bila isprekidana linija</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m5').change(function(){

	$(".s5").removeClass("hider");
	$('input[name="quest5"]').attr('disabled', 'disabled');

});

$('input#mx5').change(function(){

	$(".s5").removeClass("hider");
	$('input[name="quest5"]').attr('disabled', 'disabled');

});

$('input#my5').change(function(){

	$(".s5").removeClass("hider");
	$('input[name="quest5"]').attr('disabled', 'disabled');

});

</script>