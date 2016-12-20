<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">25. Vozila natovarena opasnim materijama:</p></br>
				<span class="glyphicon glyphicon-remove s25 hider"></span><label class="radio-inline"><input type="radio" id="mx25" name="quest25">a)</label>
				<p class="par">mogu se zaustaviti i prakirati na odredjenim mestima na kolovozu</p></br>
				<span class="glyphicon glyphicon-ok s25 hider"></span><label class="radio-inline"><input type="radio" id="m25" name="quest25">b)</label>
				<p class="par">ne mogu se zaustaviti ili parkirati na kolovozu</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m25').change(function(){

	$(".s25").removeClass("hider");
	$('input[name="quest25"]').attr('disabled', 'disabled');

});

$('input#mx25').change(function(){

	$(".s25").removeClass("hider");
	$('input[name="quest25"]').attr('disabled', 'disabled');

});

</script>