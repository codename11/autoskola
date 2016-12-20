<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">33. Prilikom vožnje zamor se kod vozača javlja:</p></br>
				<span class="glyphicon glyphicon-remove s33 hider"></span><label class="radio-inline"><input type="radio" id="mx33" name="quest33">a)</label>
				<p class="par">iznenada nakon kratke vožnje</p></br>
				<span class="glyphicon glyphicon-ok s33 hider"></span><label class="radio-inline"><input type="radio" id="m33" name="quest33">b)</label>
				<p class="par">posle nekoliko sati vožnje</p></br>
				<span class="glyphicon glyphicon-remove s33 hider"></span><label class="radio-inline"><input type="radio" id="my33" name="quest33">c)</label>
				<p class="par">kod iskusnih vozača se uopšte ne javlja</p></br>
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