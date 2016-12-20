<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">22. Vozač koga sustigne vozilo ili kolona vozila pod pratnjom dužan je da:</p></br>
				<span class="glyphicon glyphicon-remove s22 hider"></span><label class="radio-inline"><input type="radio" id="mx22" name="quest22">a)</label>
				<p class="par">smanji brzinu svog vozila</p></br>
				<span class="glyphicon glyphicon-ok s22 hider"></span><label class="radio-inline"><input type="radio" id="m22" name="quest22">b)</label>
				<p class="par">zaustavi svoje vozilo</p></br>
				<span class="glyphicon glyphicon-remove s22 hider"></span><label class="radio-inline"><input type="radio" id="my22" name="quest22">c)</label>
				<p class="par">poveća brzinu kretanja svog vozila</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m22').change(function(){

	$(".s22").removeClass("hider");
	$('input[name="quest22"]').attr('disabled', 'disabled');

});

$('input#mx22').change(function(){

	$(".s22").removeClass("hider");
	$('input[name="quest22"]').attr('disabled', 'disabled');

});

$('input#my22').change(function(){

	$(".s22").removeClass("hider");
	$('input[name="quest22"]').attr('disabled', 'disabled');

});

</script>