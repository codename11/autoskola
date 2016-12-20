<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">9. Vozač putničkog automobila skreće u levo:</p></br>
				<img src="images\test\test25.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-ok s9 hider"></span><label class="radio-inline"><input type="radio" id="m9" name="quest9">a)</label>
				<p class="par">iz odgovarajuće saobraćajne trake</p></br>
				<span class="glyphicon glyphicon-remove s9 hider"></span><label class="radio-inline"><input type="radio" id="mx9" name="quest9">b)</label>
				<p class="par">dužan je da skretanje vrši iz krajnje leve trake</p></br>
				<span class="glyphicon glyphicon-remove s9 hider"></span><label class="radio-inline"><input type="radio" id="my9" name="quest9">c)</label>
				<p class="par">na raskrsnici na kojoj mu skretanje levo nije dozvoljeno</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m9').change(function(){

	$(".s9").removeClass("hider");
	$('input[name="quest9"]').attr('disabled', 'disabled');

});

$('input#mx9').change(function(){

	$(".s9").removeClass("hider");
	$('input[name="quest9"]').attr('disabled', 'disabled');

});

$('input#my9').change(function(){

	$(".s9").removeClass("hider");
	$('input[name="quest9"]').attr('disabled', 'disabled');

});

</script>