<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">2. U istoj situaciji putnički automobil koji vrši polukružno okretanje:</p></br>
				<span class="glyphicon glyphicon-remove s2 hider"></span><label class="radio-inline"><input type="radio" id="mx2" name="quest2">a)</label>
				<p class="par">ima prvenstvo prolaza u odnosu na putnički automobil koji skreće udesno</p></br>
				<span class="glyphicon glyphicon-ok s2 hider"></span><label class="radio-inline"><input type="radio" id="m2" name="quest2">b)</label>
				<p class="par">dužan je da propusti putnićki automobil koji skreće udesno</p></br>
				<span class="glyphicon glyphicon-remove s2 hider"></span><label class="radio-inline"><input type="radio" id="my2" name="quest2">c)</label>
				<p class="par">mora se dogovoriti sa vozačem drugog vozila</p></br>
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

$('input#my2').change(function(){

	$(".s2").removeClass("hider");
	$('input[name="quest2"]').attr('disabled', 'disabled');

});

</script>