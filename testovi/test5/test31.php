<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">31. Kontrolna lampa crvene boje u kabini vozila se pali kada su na vozilu upaljena:</p></br>
				<span class="glyphicon glyphicon-remove s31 hider"></span><label class="radio-inline"><input type="radio" id="mx31" name="quest31">a)</label>
				<p class="par">duga svetla</p></br>
				<span class="glyphicon glyphicon-remove s31 hider"></span><label class="radio-inline"><input type="radio" id="my31" name="quest31">b)</label>
				<p class="par">bilo koja svetla na vozilu</p></br>
				<span class="glyphicon glyphicon-ok s31 hider"></span><label class="radio-inline"><input type="radio" id="m31" name="quest31">c)</label>
				<p class="par">sva četiri pokazivača pravca istovremeno</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m31').change(function(){

	$(".s31").removeClass("hider");
	$('input[name="quest31"]').attr('disabled', 'disabled');

});

$('input#mx31').change(function(){

	$(".s31").removeClass("hider");
	$('input[name="quest31"]').attr('disabled', 'disabled');

});

$('input#my31').change(function(){

	$(".s31").removeClass("hider");
	$('input[name="quest31"]').attr('disabled', 'disabled');

});

</script>