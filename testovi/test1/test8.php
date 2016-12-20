<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">8. U istoj situaciji prvenstvo prolaza je regulisano:</p></br>
				<span class="glyphicon glyphicon-ok s8 hider"></span><label class="radio-inline"><input type="radio" id="m8" name="quest8">a)</label>
				<p class="par">pravilima saobraćaja</p></br>
				<span class="glyphicon glyphicon-remove s8 hider"></span><label class="radio-inline"><input type="radio" id="mx8" name="quest8">b)</label>
				<p class="par">saobraćajnim znakovima</p></br>
				<span class="glyphicon glyphicon-remove s8 hider"></span><label class="radio-inline"><input type="radio" id="my8" name="quest8">c)</label>
				<p class="par">nije uopšte regulisano</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m8').change(function(){

	$(".s8").removeClass("hider");
	$('input[name="quest8"]').attr('disabled', 'disabled');

});

$('input#mx8').change(function(){

	$(".s8").removeClass("hider");
	$('input[name="quest8"]').attr('disabled', 'disabled');

});

$('input#my8').change(function(){

	$(".s8").removeClass("hider");
	$('input[name="quest8"]').attr('disabled', 'disabled');

});
</script>