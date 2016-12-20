<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">22. Na motociklu po danu moraju biti upaljena oborena svetla uvek za vreme vožnje na putu:</p></br>
				<span class="glyphicon glyphicon-ok s22 hider"></span><label class="radio-inline"><input type="radio" id="mx22" name="quest22">a)</label>
				<p class="par">samo u naseljenom mestu</p></br>
				<span class="glyphicon glyphicon-remove s22 hider"></span><label class="radio-inline"><input type="radio" id="my22" name="quest22">b)</label>
				<p class="par">u naseljenom mestu i van naseljenog mesta</p></br>
				<span class="glyphicon glyphicon-remove s22 hider"></span><label class="radio-inline"><input type="radio"  id="m22" name="quest22">c)</label>
				<p class="par">van naseljenog mesta</p></br>
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