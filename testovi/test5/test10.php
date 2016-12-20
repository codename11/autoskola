<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">10. Kada je vozilo pod pratnjom na zadatku, odredba zakona o zabrani presecanja kolone pešaka se na njega:</p></br>
				<span class="glyphicon glyphicon-remove s10 hider"></span><label class="radio-inline"><input type="radio" id="mx10" name="quest10">a)</label>
				<p class="par">primenjuje</p></br>
				<span class="glyphicon glyphicon-ok s10 hider"></span><label class="radio-inline"><input type="radio" id="m10" name="quest10">b)</label>
				<p class="par">ne primenjuje</p></br>
				<span class="glyphicon glyphicon-remove s10 hider"></span><label class="radio-inline"><input type="radio" id="my10" name="quest10">c)</label>
				<p class="par">nije regulisano zakonom</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m10').change(function(){

	$(".s10").removeClass("hider");
	$('input[name="quest10"]').attr('disabled', 'disabled');

});

$('input#mx10').change(function(){

	$(".s10").removeClass("hider");
	$('input[name="quest10"]').attr('disabled', 'disabled');

});

$('input#my10').change(function(){

	$(".s10").removeClass("hider");
	$('input[name="quest10"]').attr('disabled', 'disabled');

});
</script>