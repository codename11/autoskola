<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">30. Stop svetla ne moraju imati vozila koja na ravnom putu ne mogu razviti brzinu veću od:</p></br>
				<span class="glyphicon glyphicon-ok s30 hider"></span><label class="radio-inline"><input type="radio" id="m30" name="quest30">a)</label>
				<p class="par">20km/h</p></br>
				<span class="glyphicon glyphicon-remove s30 hider"></span><label class="radio-inline"><input type="radio" id="mx30" name="quest30">b)</label>
				<p class="par">30km/h</p></br>
				<span class="glyphicon glyphicon-remove s30 hider"></span><label class="radio-inline"><input type="radio" id="my30" name="quest30">c)</label>
				<p class="par">40km/h</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m30').change(function(){

	$(".s30").removeClass("hider");
	$('input[name="quest30"]').attr('disabled', 'disabled');

});

$('input#mx30').change(function(){

	$(".s30").removeClass("hider");
	$('input[name="quest30"]').attr('disabled', 'disabled');

});

$('input#my30').change(function(){

	$(".s30").removeClass("hider");
	$('input[name="quest30"]').attr('disabled', 'disabled');

});

</script>