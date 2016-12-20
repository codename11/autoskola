<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">7. Putnički automobil pretiče kombi u situaciji na slici:</p></br>
				<img src="images\test\test34.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-remove s7 hider"></span><label class="radio-inline"><input type="radio" id="mx7" name="quest7">a)</label>
				<p class="par">propisno, jer mu je to dozvoljeno saobraćajnim znakom</p></br>
				<span class="glyphicon glyphicon-remove s7 hider"></span><label class="radio-inline"><input type="radio" id="my7" name="quest7">b)</label>
				<p class="par">propisno, jer mu nije zabranjeno saobraćajnim znakom niti oznakama na kolovozu</p></br>
				<span class="glyphicon glyphicon-ok s7 hider"></span><label class="radio-inline"><input type="radio" id="m7" name="quest7">c)</label>
				<p class="par">nepropisno, jer mu je saobraćajna traka iz suprotnog smera nije slobodna</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m7').change(function(){

	$(".s7").removeClass("hider");
	$('input[name="quest7"]').attr('disabled', 'disabled');

});

$('input#mx7').change(function(){

	$(".s7").removeClass("hider");
	$('input[name="quest7"]').attr('disabled', 'disabled');

});

$('input#my7').change(function(){

	$(".s7").removeClass("hider");
	$('input[name="quest7"]').attr('disabled', 'disabled');

});

</script>