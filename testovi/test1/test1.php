<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">1. U situaciji kao na slici, vozač putničkog vozila koje se uključuje u saobraćaj sa parkinga:</p>
				<img src="images\test\test1.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-remove s1 hider"></span><label class="radio-inline"><input type="radio" id="mx1" name="quest1">a)</label>
				<p class="par">ima prvenstvo prolaza</p></br>
				<span class="glyphicon glyphicon-ok s1 hider"></span><label class="radio-inline"><input type="radio" id="m1" name="quest1">b)</label>
				<p class="par">dužan je da propusti samo vozilo koje se kreće kolovoznom trakom na koju se uključuje</p></br>
				<span class="glyphicon glyphicon-remove s1 hider"></span><label class="radio-inline"><input type="radio" id="my1" name="quest1">c)</label>
				<p class="par">dužan je da propusti oba vozila</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
	<div style="display: inline"></div>
<script>
	$('input#m1').change(function(){

	$(".s1").removeClass("hider");
	$('input[name="quest1"]').attr('disabled', 'disabled');

});

$('input#mx1').change(function(){

	$(".s1").removeClass("hider");
	$('input[name="quest1"]').attr('disabled', 'disabled');

});

$('input#my1').change(function(){

	$(".s1").removeClass("hider");
	$('input[name="quest1"]').attr('disabled', 'disabled');

});
</script>