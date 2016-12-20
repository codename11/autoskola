<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">29. Pomoćna kočnica mora biti takva da omogući vozaču u slučaju da otkaže radna kočnica, da vozilo zaustavi:</p></br>
				<span class="glyphicon glyphicon-remove s29 hider"></span><label class="radio-inline"><input type="radio" id="mx29" name="quest29">a)</label>
				<p class="par">na bilo kom odstojanju</p></br>
				<span class="glyphicon glyphicon-ok s29 hider"></span><label class="radio-inline"><input type="radio" id="m29" name="quest29">b)</label>
				<p class="par">odgovarajućem odstojanju</p></br>
				<span class="glyphicon glyphicon-remove s29 hider"></span><label class="radio-inline"><input type="radio" id="my29" name="quest29">c)</label>
				<p class="par"> istom odstojanju kao i radna kočnica</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m29').change(function(){

	$(".s29").removeClass("hider");
	$('input[name="quest29"]').attr('disabled', 'disabled');

});

$('input#mx29').change(function(){

	$(".s29").removeClass("hider");
	$('input[name="quest29"]').attr('disabled', 'disabled');

});

$('input#my29').change(function(){

	$(".s29").removeClass("hider");
	$('input[name="quest29"]').attr('disabled', 'disabled');

});

</script>