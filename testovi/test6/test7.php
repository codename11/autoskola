<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">7. Propisima je odredjeno da vozač stavlja u dejstvo radnu kočnicu priključnog vozila sa vozačkog mesta:</p></br>
				<span class="glyphicon glyphicon-ok s7 hider"></span><label class="radio-inline"><input type="radio" id="m7" name="quest7">a)</label>
				<p class="par">pomoću komande kojom se stavlja u dejstvo radna kočnica vučnog vozila</p></br>
				<span class="glyphicon glyphicon-remove s7 hider"></span><label class="radio-inline"><input type="radio" id="mx7" name="quest7">b)</label>
				<p class="par">pomoću posebne komande, koja mora biti odvojena od komande radne kočnice vučnog vozila</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m7').change(function(){

	$(".s7").removeClass("hider");
	$('input[name="quest7"]').attr('disabled', 'disabled');

});

$('input#mx7').change(function(){

	$(".s7").removeClass("hider");
	$('input[name="quest7"]').attr('disabled', 'disabled');

});

</script>