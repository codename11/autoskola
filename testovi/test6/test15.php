<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">15. Vozač autobusa ne sme neprekidno upravljati vozilom duže od:</p></br>
				<span class="glyphicon glyphicon-ok s15 hider"></span><label class="radio-inline"><input type="radio" id="m15" name="quest15">a)</label>
				<p class="par">5 časova</p></br>
				<span class="glyphicon glyphicon-remove s15 hider"></span><label class="radio-inline"><input type="radio" id="mx15" name="quest15">b)</label>
				<p class="par">7 časova</p></br>
				<span class="glyphicon glyphicon-remove s15 hider"></span><label class="radio-inline"><input type="radio" id="my15" name="quest15">c)</label>
				<p class="par">9 časova</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m15').change(function(){

	$(".s15").removeClass("hider");
	$('input[name="quest15"]').attr('disabled', 'disabled');

});

$('input#mx15').change(function(){

	$(".s15").removeClass("hider");
	$('input[name="quest15"]').attr('disabled', 'disabled');

});

$('input#my15').change(function(){

	$(".s15").removeClass("hider");
	$('input[name="quest15"]').attr('disabled', 'disabled');

});

</script>