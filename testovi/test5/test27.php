<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">27. Na prevoju puta zabranjeno je:</p></br>
				<span class="glyphicon glyphicon-remove s27 hider"></span><label class="radio-inline"><input type="radio" id="mx27" name="quest27">a)</label>
				<p class="par">parkiranje</p></br>
				<span class="glyphicon glyphicon-remove s27 hider"></span><label class="radio-inline"><input type="radio" id="my27" name="quest27">b)</label>
				<p class="par">zaustavljanje</p></br>
				<span class="glyphicon glyphicon-ok s27 hider"></span><label class="radio-inline"><input type="radio" id="m27" name="quest27">c)</label>
				<p class="par">parkiranje i zaustavljanje</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m27').change(function(){

	$(".s27").removeClass("hider");
	$('input[name="quest27"]').attr('disabled', 'disabled');

});

$('input#mx27').change(function(){

	$(".s27").removeClass("hider");
	$('input[name="quest27"]').attr('disabled', 'disabled');

});

$('input#my27').change(function(){

	$(".s27").removeClass("hider");
	$('input[name="quest27"]').attr('disabled', 'disabled');

});

</script>