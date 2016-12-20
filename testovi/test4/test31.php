<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">31. Stop svetla na zadnjoj strani motornog vozila pale se:</p></br>
				<span class="glyphicon glyphicon-ok s31 hider"></span><label class="radio-inline"><input type="radio" id="m31" name="quest31">a)</label>
				<p class="par">automatski prilikom pritiska na pedalu radne kočnice</p></br>
				<span class="glyphicon glyphicon-remove s31 hider"></span><label class="radio-inline"><input type="radio" name="quest31">b)</label>
				<p class="par">prilikom svakog ubacivanja ručice menjača u niži stepen prenosa</p></br>
				<span class="glyphicon glyphicon-remove s31 hider"></span><label class="radio-inline"><input type="radio" name="quest31">c)</label>
				<p class="par">prilikom svakog povlačenja pomoćne kočnice</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m31').change(function(){

	$(".s31").removeClass("hider");
	$('input[name="quest31"]').attr('disabled', 'disabled');

});

$('input#mx31').change(function(){

	$(".s31").removeClass("hider");
	$('input[name="quest31"]').attr('disabled', 'disabled');

});

$('input#my31').change(function(){

	$(".s31").removeClass("hider");
	$('input[name="quest31"]').attr('disabled', 'disabled');

});

</script>