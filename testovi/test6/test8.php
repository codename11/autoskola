<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">8. Priključni uredjaji za spajanje vučnog i priključnog vozila pričvršćuju se:</p></br>
				<span class="glyphicon glyphicon-ok s8 hider"></span><label class="radio-inline"><input type="radio" id="m8" name="quest8">a)</label>
				<p class="par">za ojačani deo vozila</p></br>
				<span class="glyphicon glyphicon-remove s8 hider"></span><label class="radio-inline"><input type="radio" id="mx8" name="quest8">b)</label>
				<p class="par">za bili koji nepokretni deo vozila</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m8').change(function(){

	$(".s8").removeClass("hider");
	$('input[name="quest8"]').attr('disabled', 'disabled');

});

$('input#mx8').change(function(){

	$(".s8").removeClass("hider");
	$('input[name="quest8"]').attr('disabled', 'disabled');

});

</script>