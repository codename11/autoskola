<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">4. Na istoj slici vozilo kao u prethodnom pitanju, trakom za prinudno zaustavljanje vozila u situaciji na slici:</p></br>
				<span class="glyphicon glyphicon-remove s4 hider"></span><label class="radio-inline"><input type="radio" id="mx4" name="quest4">a)</label>
				<p class="par">mogu se kretati sporija vozila</p></br>
				<span class="glyphicon glyphicon-remove s4 hider"></span><label class="radio-inline"><input type="radio" id="my4" name="quest4">b)</label>
				<p class="par">mogu se kretati samo bicikli i bicikli sa motorom</p></br>
				<span class="glyphicon glyphicon-ok s4 hider"></span><label class="radio-inline"><input type="radio" id="m4" name="quest4">c)</label>
				<p class="par">ne smeju se kretati vozila</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m4').change(function(){

	$(".s4").removeClass("hider");
	$('input[name="quest4"]').attr('disabled', 'disabled');

});

$('input#mx4').change(function(){

	$(".s4").removeClass("hider");
	$('input[name="quest4"]').attr('disabled', 'disabled');

});

$('input#my4').change(function(){

	$(".s4").removeClass("hider");
	$('input[name="quest4"]').attr('disabled', 'disabled');

});
</script>