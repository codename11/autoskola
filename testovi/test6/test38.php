<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">38. Vozilo kojim se prevoze opasne materije, brzina kretanja:</p></br>
				<span class="glyphicon glyphicon-ok s38 hider"></span><label class="radio-inline"><input type="radio" id="m38" name="quest38">a)</label>
				<p class="par">ne sme biti veća od 80% najveće ili propisane brzine</p></br>
				<span class="glyphicon glyphicon-remove s38 hider"></span><label class="radio-inline"><input type="radio" id="mx38" name="quest38">b)</label>
				<p class="par">nije ograničena već zavisi od propisane brzine za put kojim se kreće</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m38').change(function(){

	$(".s38").removeClass("hider");
	$('input[name="quest38"]').attr('disabled', 'disabled');

});

$('input#mx38').change(function(){

	$(".s38").removeClass("hider");
	$('input[name="quest38"]').attr('disabled', 'disabled');

});

</script>