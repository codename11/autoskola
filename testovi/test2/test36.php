<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">36.Da li se predmeti zabodeni u ranu:</p></br>
				<span class="glyphicon glyphicon-remove s36 hider"></span><label class="radio-inline"><input type="radio" id="mx36" name="quest36">a)</label>
				<p class="par">moraju odmah izvaditi</p></br>
				<span class="glyphicon glyphicon-ok s36 hider"></span><label class="radio-inline"><input type="radio" id="m36" name="quest36">b)</label>
				<p class="par">ne smeju vaditi</p></br>
				<span class="glyphicon glyphicon-remove s36 hider"></span><label class="radio-inline"><input type="radio" id="my36" name="quest36">c)</label>
				<p class="par">vade se tek kada se rana ispere alkoholom</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
</div></br>
<script>
	$('input#m36').change(function(){

	$(".s36").removeClass("hider");
	$('input[name="quest36"]').attr('disabled', 'disabled');

});

$('input#mx36').change(function(){

	$(".s36").removeClass("hider");
	$('input[name="quest36"]').attr('disabled', 'disabled');

});

$('input#my36').change(function(){

	$(".s36").removeClass("hider");
	$('input[name="quest36"]').attr('disabled', 'disabled');

});

</script>