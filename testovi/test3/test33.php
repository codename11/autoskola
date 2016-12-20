<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">33. Uglen-monoksid je gas koji nastaje nepotpunim sagorevanjem u benzinskim motorima i koji je:</p></br>
				<span class="glyphicon glyphicon-ok s33 hider"></span><label class="radio-inline"><input type="radio" id="m33" name="quest33">a)</label>
				<p class="par">bez boje, ukusa i mirisa</p></br>
				<span class="glyphicon glyphicon-remove s33 hider"></span><label class="radio-inline"><input type="radio" id="mx33" name="quest33">b)</label>
				<p class="par">prirodnog mirisa, siv i bez ukusa</p></br>
				<span class="glyphicon glyphicon-remove s33 hider"></span><label class="radio-inline"><input type="radio" id="my33" name="quest33">c)</label>
				<p class="par">sladunjavog ukusa, crn i jakog mirisa</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
</div></br>
<script>
	$('input#m33').change(function(){

	$(".s33").removeClass("hider");
	$('input[name="quest33"]').attr('disabled', 'disabled');

});

$('input#mx33').change(function(){

	$(".s33").removeClass("hider");
	$('input[name="quest33"]').attr('disabled', 'disabled');

});

$('input#my33').change(function(){

	$(".s33").removeClass("hider");
	$('input[name="quest33"]').attr('disabled', 'disabled');

});

</script>