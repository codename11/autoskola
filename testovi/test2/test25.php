<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">25. Žuto trepćuće svetlo na semaforu, obavezuje sve učesnike u saobraćaju da:</p></br>
				<span class="glyphicon glyphicon-remove s25 hider"></span><label class="radio-inline"><input type="radio" id="mx25" name="quest25">a)</label>
				<p class="par">povećaju brzinu kretanja vozila i što pre predju preko raskrsnice</p></br>
				<span class="glyphicon glyphicon-ok s25 hider"></span><label class="radio-inline"><input type="radio" id="m25" name="quest25">b)</label>
				<p class="par">da se kreću uz povećanu opreznost</p></br>
				<span class="glyphicon glyphicon-remove s25 hider"></span><label class="radio-inline"><input type="radio" id="my25" name="quest25">c)</label>
				<p class="par">da se zaustave</p></br>
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

$('input#my25').change(function(){

	$(".s25").removeClass("hider");
	$('input[name="quest25"]').attr('disabled', 'disabled');

});

</script>