<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">28. Svetlo za vožnju unazad daje svetlo:</p></br>
				<span class="glyphicon glyphicon-remove s28 hider"></span><label class="radio-inline"><input type="radio" id="mx28" name="quest28">a)</label>
				<p class="par">crvene boje</p></br>
				<span class="glyphicon glyphicon-ok s28 hider"></span><label class="radio-inline"><input type="radio" id="m28" name="quest28">b)</label>
				<p class="par">bele boje</p></br>
				<span class="glyphicon glyphicon-remove s28 hider"></span><label class="radio-inline"><input type="radio" id="my28" name="quest28">c)</label>
				<p class="par">bele ili žute boje</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m28').change(function(){

	$(".s28").removeClass("hider");
	$('input[name="quest28"]').attr('disabled', 'disabled');

});

$('input#mx28').change(function(){

	$(".s28").removeClass("hider");
	$('input[name="quest28"]').attr('disabled', 'disabled');

});

$('input#my28').change(function(){

	$(".s28").removeClass("hider");
	$('input[name="quest28"]').attr('disabled', 'disabled');

});

</script>