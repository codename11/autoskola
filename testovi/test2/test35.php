<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">35.Iskrvarenost je gubitak veće ili manje količine krvi. Smrt će nastupiti ako povredjeni izgubi više od:</p></br>
				<span class="glyphicon glyphicon-remove s35 hider"></span><label class="radio-inline"><input type="radio" id="mx35" name="quest35">a)</label>
				<p class="par">1/2 celokupnog volumena krvi</p></br>
				<span class="glyphicon glyphicon-remove s35 hider"></span><label class="radio-inline"><input type="radio" id="my35" name="quest35">b)</label>
				<p class="par">3/4 celokupnog volumena krvi</p></br>
				<span class="glyphicon glyphicon-ok s35 hider"></span><label class="radio-inline"><input type="radio" id="m35" name="quest35">c)</label>
				<p class="par">1/3 celokupnog volumena krvi</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
</div></br>
<script>
	$('input#m35').change(function(){

	$(".s35").removeClass("hider");
	$('input[name="quest35"]').attr('disabled', 'disabled');

});

$('input#mx35').change(function(){

	$(".s35").removeClass("hider");
	$('input[name="quest35"]').attr('disabled', 'disabled');

});

$('input#my35').change(function(){

	$(".s35").removeClass("hider");
	$('input[name="quest35"]').attr('disabled', 'disabled');

});

</script>