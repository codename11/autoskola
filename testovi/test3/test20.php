<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">20. Kada su ugradjeni sigurnosni pojasevi u vozilu, dužni su da ih koriste uvek dok se vozilo kreće u saobraćaju na javnom putu:</p></br>
				<span class="glyphicon glyphicon-remove s20 hider"></span><label class="radio-inline"><input type="radio" id="mx20" name="quest20">a)</label>
				<p class="par">samo vozač</p></br>
				<span class="glyphicon glyphicon-remove s20 hider"></span><label class="radio-inline"><input type="radio" id="my20" name="quest20">b)</label>
				<p class="par">vozač i suvozač</p></br>
				<span class="glyphicon glyphicon-ok s20 hider"></span><label class="radio-inline"><input type="radio" id="m20" name="quest20">c)</label>
				<p class="par">vozač i lica koja se prevoze u vozilu</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
</div></br>
<script>
	$('input#m20').change(function(){

	$(".s20").removeClass("hider");
	$('input[name="quest20"]').attr('disabled', 'disabled');

});

$('input#mx20').change(function(){

	$(".s20").removeClass("hider");
	$('input[name="quest20"]').attr('disabled', 'disabled');

});

$('input#my20').change(function(){

	$(".s20").removeClass("hider");
	$('input[name="quest20"]').attr('disabled', 'disabled');

});

</script>