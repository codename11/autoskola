<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">23. Ako se na sredini puta sa jednosmernim saobraćajem nalazi pešačko ostrvo, vozila mogu da obidju:</p></br>
				<span class="glyphicon glyphicon-remove s23 hider"></span><label class="radio-inline"><input type="radio" id="mx23" name="quest23">a)</label>
				<p class="par">samo sa desne strane</p></br>
				<span class="glyphicon glyphicon-remove s23 hider"></span><label class="radio-inline"><input type="radio" id="my23" name="quest23">b)</label>
				<p class="par">samo sa leve strane</p></br>
				<span class="glyphicon glyphicon-ok s23 hider"></span><label class="radio-inline"><input type="radio" id="m23" name="quest23">c)</label>
				<p class="par">sa obe strane</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
</div></br>
<script>
	$('input#m23').change(function(){

	$(".s23").removeClass("hider");
	$('input[name="quest23"]').attr('disabled', 'disabled');

});

$('input#mx23').change(function(){

	$(".s23").removeClass("hider");
	$('input[name="quest23"]').attr('disabled', 'disabled');

});

$('input#my23').change(function(){

	$(".s23").removeClass("hider");
	$('input[name="quest23"]').attr('disabled', 'disabled');

});

</script>