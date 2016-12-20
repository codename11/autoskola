<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">26. Dozvoljeno je da teret na prednjoj strani vozila sme da predje najudaljeniju tačku:</p></br>
				<span class="glyphicon glyphicon-remove s26 hider"></span><label class="radio-inline"><input type="radio" id="mx26" name="quest26">a)</label>
				<p class="par">više od 1m</p></br>
				<span class="glyphicon glyphicon-remove s26 hider"></span><label class="radio-inline"><input type="radio" id="my26" name="quest26">b)</label>
				<p class="par">najviše 40cm</p></br>
				<span class="glyphicon glyphicon-ok s26 hider"></span><label class="radio-inline"><input type="radio" id="m26" name="quest26">c)</label>
				<p class="par">najviše 1m</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m26').change(function(){

	$(".s26").removeClass("hider");
	$('input[name="quest26"]').attr('disabled', 'disabled');

});

$('input#mx26').change(function(){

	$(".s26").removeClass("hider");
	$('input[name="quest26"]').attr('disabled', 'disabled');

});

$('input#my26').change(function(){

	$(".s26").removeClass("hider");
	$('input[name="quest26"]').attr('disabled', 'disabled');

});

</script>