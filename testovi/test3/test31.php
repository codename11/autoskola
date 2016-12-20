<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">31. Na motornom vozilu uredjaj za upravljanje:</p></br>
				<span class="glyphicon glyphicon-ok s31 hider"></span><label class="radio-inline"><input type="radio" id="m31" name="quest31">a)</label>
				<p class="par">sme imati slobodan hod do 31°</p></br>
				<span class="glyphicon glyphicon-remove s31 hider"></span><label class="radio-inline"><input type="radio" id="mx31" name="quest31">b)</label>
				<p class="par">ne sme imati slobodan hod</p></br>
				<span class="glyphicon glyphicon-remove s31 hider"></span><label class="radio-inline"><input type="radio" id="my31" name="quest31">c)</label>
				<p class="par">sme imati slobodan hod do 15°</p></br>
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