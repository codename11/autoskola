<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">15. Ruka horizontalno predručena sa otvorenom šakom znači:</p>
				<img src="images\test\test9.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-remove s15 hider"></span><label class="radio-inline"><input type="radio" id="mx15" name="quest15">a)</label>
				<p class="par">slobodan poziv za sva vozila koja mu dolace sa bočnih strana</p></br>
				<span class="glyphicon glyphicon-ok s15 hider"></span><label class="radio-inline"><input type="radio" id="m15" name="quest15">b)</label>
				<p class="par">zabranu prolaza za sve učesnike u saobraćaju čiji smer kretanja seče smer ispružene ruke</p></br>
				<span class="glyphicon glyphicon-remove s15 hider"></span><label class="radio-inline"><input type="radio" id="my15" name="quest15">c)</label>
				<p class="par">zabranu prolaza za sva vozila</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m15').change(function(){

	$(".s15").removeClass("hider");
	$('input[name="quest15"]').attr('disabled', 'disabled');

});

$('input#mx15').change(function(){

	$(".s15").removeClass("hider");
	$('input[name="quest15"]').attr('disabled', 'disabled');

});

$('input#my15').change(function(){

	$(".s15").removeClass("hider");
	$('input[name="quest15"]').attr('disabled', 'disabled');

});

</script>