<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">7. Saobraćajnim znakom je zabranjeno da stupi na uski deo puta pre nego što prodje vozilo iz suprotnog smera, vozač:</p></br>
				<img src="images\test\test14.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-remove s7 hider"></span><label class="radio-inline"><input type="radio" id="mx7" name="quest7">a)</label>
				<p class="par">vozila koje se kreću uz nagib</p></br>
				<span class="glyphicon glyphicon-ok s7 hider"></span><label class="radio-inline"><input type="radio" id="m7" name="quest7">b)</label>
				<p class="par">vozila koje se kreću niz nagib</p></br>
				<span class="glyphicon glyphicon-remove s7 hider"></span><label class="radio-inline"><input type="radio" id="my7" name="quest7">c)</label>
				<p class="par">oba vozila</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m7').change(function(){

	$(".s7").removeClass("hider");
	$('input[name="quest7"]').attr('disabled', 'disabled');

});

$('input#mx7').change(function(){

	$(".s7").removeClass("hider");
	$('input[name="quest7"]').attr('disabled', 'disabled');

});

$('input#my7').change(function(){

	$(".s7").removeClass("hider");
	$('input[name="quest7"]').attr('disabled', 'disabled');

});

</script>