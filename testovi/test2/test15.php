<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">15. Horizontalno predručena ruka sa otvorenom šakom i kružno kretanje podlaktice i šake sa desne u levu stranu, znači da vozač u čijem se pravcu daje ovaj znak:</p></br>
				<img src="images\test\test19.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-ok s15 hider"></span><label class="radio-inline"><input type="radio" id="m15" name="quest15">a)</label>
				<p class="par">poveća brzinu kretanja svog vozila</p></br>
				<span class="glyphicon glyphicon-remove s15 hider"></span><label class="radio-inline"><input type="radio" id="mx15" name="quest15">b)</label>
				<p class="par">smanji brzinu kretanja svog vozila</p></br>
				<span class="glyphicon glyphicon-remove s15 hider"></span><label class="radio-inline"><input type="radio" id="my15" name="quest15">c)</label>
				<p class="par">nastavi kretanje istom brzinom</p></br>
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