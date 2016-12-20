<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">37. Pušenje za volanom u toku vožnje:</p></br>
				<span class="glyphicon glyphicon-ok s37 hider"></span><label class="radio-inline"><input type="radio" id="m37" name="quest37">a)</label>
				<p class="par">spada u faktore rizika</p></br>
				<span class="glyphicon glyphicon-remove s37 hider"></span><label class="radio-inline"><input type="radio" id="mx37" name="quest37">b)</label>
				<p class="par">ne spada u faktore rizika</p></br>
				<span class="glyphicon glyphicon-remove s37 hider"></span><label class="radio-inline"><input type="radio" id="my37" name="quest37">c)</label>
				<p class="par">ne utiče na bezbednost vožnje</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
</div></br>
<script>
	$('input#m37').change(function(){

	$(".s37").removeClass("hider");
	$('input[name="quest37"]').attr('disabled', 'disabled');

});

$('input#mx37').change(function(){

	$(".s37").removeClass("hider");
	$('input[name="quest37"]').attr('disabled', 'disabled');

});

$('input#my37').change(function(){

	$(".s37").removeClass("hider");
	$('input[name="quest37"]').attr('disabled', 'disabled');

});

</script>