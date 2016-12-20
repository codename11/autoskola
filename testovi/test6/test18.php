<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">18. Radna kočnica priključnog i vučnog vozila mora se stavljati u dejstvo pomoću:</p></br>
				<span class="glyphicon glyphicon-ok s18 hider"></span><label class="radio-inline"><input type="radio" id="m18" name="quest18">a)</label>
				<p class="par">iste komande</p></br>
				<span class="glyphicon glyphicon-remove s18 hider"></span><label class="radio-inline"><input type="radio" id="mx18" name="quest18">b)</label>
				<p class="par">zasebnih komandi</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m18').change(function(){

	$(".s18").removeClass("hider");
	$('input[name="quest18"]').attr('disabled', 'disabled');

});

$('input#mx18').change(function(){

	$(".s18").removeClass("hider");
	$('input[name="quest18"]').attr('disabled', 'disabled');

});

</script>