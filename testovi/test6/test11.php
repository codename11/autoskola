<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">11. Deca ispod 6god. bez pratioca, lica obolela od zaraznih bolesti, lica u pripitom stanju, lica koja svojom odećom mogu oštetiti putnike ili sedište vozila, životinje, leževi, lako zapaljive materije, eksplozivni i drugi predmeti koji mogu biti škodljivi za zdravlje ili prouzrokovati kakvu štetu:</p></br>
				<span class="glyphicon glyphicon-ok s11 hider"></span><label class="radio-inline"><input type="radio" id="m11" name="quest11">a)</label>
				<p class="par">ne smeju se prevoziti u javnom prevozu</p></br>
				<span class="glyphicon glyphicon-remove s11 hider"></span><label class="radio-inline"><input type="radio" id="mx11" name="quest11">b)</label>
				<p class="par">mogu se prevoziti u javnom prevozu, ali uz posebno odobrenje prisutnih putnika</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m11').change(function(){

	$(".s11").removeClass("hider");
	$('input[name="quest11"]').attr('disabled', 'disabled');

});

$('input#mx11').change(function(){

	$(".s11").removeClass("hider");
	$('input[name="quest11"]').attr('disabled', 'disabled');

});

</script>