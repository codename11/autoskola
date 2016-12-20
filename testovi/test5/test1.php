<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">1. U situaciji na slici, vozač putničkog automobila vrši preticanje na mestu gde mu je to:</p></br>
				<img src="images\test\test42.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-remove s1 hider"></span><label class="radio-inline"><input type="radio" id="mx1" name="quest1">a)</label>
				<p class="par">dozvoljeno oznakama na kolovozu</p></br>
				<span class="glyphicon glyphicon-ok s1 hider"></span><label class="radio-inline"><input type="radio" id="m1" name="quest1">b)</label>
				<p class="par">zabranjeno oznakama na kolovozu</p></br>
				<span class="glyphicon glyphicon-remove s1 hider"></span><label class="radio-inline"><input type="radio" id="my1" name="quest1">c)</label>
				<p class="par">dozvoljeno saobraćajnim znakom</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m1').change(function(){

	$(".s1").removeClass("hider");
	$('input[name="quest1"]').attr('disabled', 'disabled');

});

$('input#mx1').change(function(){

	$(".s1").removeClass("hider");
	$('input[name="quest1"]').attr('disabled', 'disabled');

});

$('input#my1').change(function(){

	$(".s1").removeClass("hider");
	$('input[name="quest1"]').attr('disabled', 'disabled');

});
</script>