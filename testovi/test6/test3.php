<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">3. Javni prevoz u drumskom saobraćaju:</p></br>
				<span class="glyphicon glyphicon-ok s3 hider"></span><label class="radio-inline"><input type="radio" id="m3" name="quest3">a)</label>
				<p class="par">može se vršiti samo motornim vozilima</p></br>
				<span class="glyphicon glyphicon-remove s3 hider"></span><label class="radio-inline"><input type="radio" id="mx3" name="quest3">b)</label>
				<p class="par">može se vršiti i motornim i zaprežnim vozilima</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m3').change(function(){

	$(".s3").removeClass("hider");
	$('input[name="quest3"]').attr('disabled', 'disabled');

});

$('input#mx3').change(function(){

	$(".s3").removeClass("hider");
	$('input[name="quest3"]').attr('disabled', 'disabled');

});

</script>