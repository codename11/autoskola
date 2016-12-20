<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">22. Na auto-putu i putu rezervisanom za saobraćaj motornih vozila, vozač ne sme da vrši vozilom:</p></br>
				<span class="glyphicon glyphicon-remove s22 hider"></span><label class="radio-inline"><input type="radio" id="mx22" name="quest22">a)</label>
				<p class="par">samo kretanje unazad</p></br>
				<span class="glyphicon glyphicon-remove s22 hider"></span><label class="radio-inline"><input type="radio" id="my22" name="quest22">b)</label>
				<p class="par">samo polukružno okretanje</p></br>
				<span class="glyphicon glyphicon-ok s22 hider"></span><label class="radio-inline"><input type="radio" id="m22" name="quest22">c)</label>
				<p class="par">polukružno okretanje i kretanje unazad</p></br>
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