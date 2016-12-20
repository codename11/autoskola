<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">16. Kada ovlašćeno lice daje znak rukom, kao što se vidi na slici:</p></br>
				<span class="glyphicon glyphicon-ok s16 hider"></span><label class="radio-inline"><input type="radio" id="m16" name="quest16">a)</label>
				<p class="par">mora stajati u središtu raskrsnice</p></br>
				<span class="glyphicon glyphicon-remove s16 hider"></span><label class="radio-inline"><input type="radio" id="mx16" name="quest16">b)</label>
				<p class="par">može stajati i na trotoaru</p></br>
				<span class="glyphicon glyphicon-remove s16 hider"></span><label class="radio-inline"><input type="radio" id="my16" name="quest16">c)</label>
				<p class="par">može stajati bilo gde po svom izboru</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m16').change(function(){

	$(".s16").removeClass("hider");
	$('input[name="quest16"]').attr('disabled', 'disabled');

});

$('input#mx16').change(function(){

	$(".s16").removeClass("hider");
	$('input[name="quest16"]').attr('disabled', 'disabled');

});

$('input#my16').change(function(){

	$(".s16").removeClass("hider");
	$('input[name="quest16"]').attr('disabled', 'disabled');

});

</script>