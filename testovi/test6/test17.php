<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">17. Minimalna dubina šare pneumatika, po obimu i širini protektora, mora za autobuse i teretna vozila da iznosi najmanje:</p></br>
				<span class="glyphicon glyphicon-remove s17 hider"></span><label class="radio-inline"><input type="radio" id="mx17" name="quest17">a)</label>
				<p class="par">5mm</p></br>
				<span class="glyphicon glyphicon-ok s17 hider"></span><label class="radio-inline"><input type="radio" id="m17" name="quest17">b)</label>
				<p class="par">2mm</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m17').change(function(){

	$(".s17").removeClass("hider");
	$('input[name="quest17"]').attr('disabled', 'disabled');

});

$('input#mx17').change(function(){

	$(".s17").removeClass("hider");
	$('input[name="quest17"]').attr('disabled', 'disabled');

});

</script>