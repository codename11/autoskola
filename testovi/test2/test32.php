<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">32.Znaci preloma kičme su:</p></br>
				<span class="glyphicon glyphicon-remove s32 hider"></span><label class="radio-inline"><input type="radio" id="mx32" name="quest32">a)</label>
				<p class="par">krvarenje i gubitak svesti</p></br>
				<span class="glyphicon glyphicon-ok s32 hider"></span><label class="radio-inline"><input type="radio" id="m32" name="quest32">b)</label>
				<p class="par">otok, krvi podliv i deformacija</p></br>
				<span class="glyphicon glyphicon-remove s32 hider"></span><label class="radio-inline"><input type="radio" id="my32" name="quest32">c)</label>
				<p class="par">oduzetost leve strane tela</p></br>
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

$('input#my32').change(function(){

	$(".s32").removeClass("hider");
	$('input[name="quest32"]').attr('disabled', 'disabled');

});

</script>