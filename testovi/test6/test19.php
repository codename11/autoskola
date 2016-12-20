<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">19. Uredjaj koji omogućuje neprekidno podešavnje intenziteta kočenja, srazmerno promeni opterećenja, obavezan je za:</p></br>
				<span class="glyphicon glyphicon-remove s19 hider"></span><label class="radio-inline"><input type="radio" id="mx19" name="quest19">a)</label>
				<p class="par">sva motorna vozila</p></br>
				<span class="glyphicon glyphicon-remove s19 hider"></span><label class="radio-inline"><input type="radio" id="my19" name="quest19">b)</label>
				<p class="par">sva priključna vozila</p></br>
				<span class="glyphicon glyphicon-ok s19 hider"></span><label class="radio-inline"><input type="radio" id="m19" name="quest19">c)</label>
				<p class="par">motorna i priključna vozila koja na bilo kojoj zadnjoj osovini imaju promenu opterećenja preko utvrdjene granice</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m19').change(function(){

	$(".s19").removeClass("hider");
	$('input[name="quest19"]').attr('disabled', 'disabled');

});

$('input#mx19').change(function(){

	$(".s19").removeClass("hider");
	$('input[name="quest19"]').attr('disabled', 'disabled');

});

$('input#my19').change(function(){

	$(".s19").removeClass("hider");
	$('input[name="quest19"]').attr('disabled', 'disabled');

});

</script>