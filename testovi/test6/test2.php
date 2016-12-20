<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">2. Pomoćnik vozača na vozilu kojim se vrši prevoz opasnih materija osim radioaktivnih:</p></br>
				<span class="glyphicon glyphicon-remove s2 hider"></span><label class="radio-inline"><input type="radio" id="mx2" name="quest2">a)</label>
				<p class="par">mora uvek da se nalazi pored vozača</p></br>
				<span class="glyphicon glyphicon-ok s2 hider"></span><label class="radio-inline"><input type="radio" id="m2" name="quest2">b)</label>
				<p class="par">ne mora da se nalazi uz vozača u slučaju razvoženja i dostavljanja količina opasnih materija</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m2').change(function(){

	$(".s2").removeClass("hider");
	$('input[name="quest2"]').attr('disabled', 'disabled');

});

$('input#mx2').change(function(){

	$(".s2").removeClass("hider");
	$('input[name="quest2"]').attr('disabled', 'disabled');

});

</script>