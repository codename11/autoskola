<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">32. Vozilo u linijskom prevozu, ako posebnim propisima nije drugačije odredjeno, opasne i škodljive materije se:</p></br>
				<span class="glyphicon glyphicon-remove s32 hider"></span><label class="radio-inline"><input type="radio" id="mx32" name="quest32">a)</label>
				<p class="par">smeju prevoziti</p></br>
				<span class="glyphicon glyphicon-ok s32 hider"></span><label class="radio-inline"><input type="radio" id="m32" name="quest32">b)</label>
				<p class="par">ne smeju prevoziti</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m32').change(function(){

	$(".s32").removeClass("hider");
	$('input[name="quest32"]').attr('disabled', 'disabled');

});

$('input#mx32').change(function(){

	$(".s32").removeClass("hider");
	$('input[name="quest32"]').attr('disabled', 'disabled');

});

</script>