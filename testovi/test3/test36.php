<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">36. Pre nego što previjete ranu povredjenog:</p></br>
				<span class="glyphicon glyphicon-remove s36 hider"></span><label class="radio-inline"><input type="radio" id="mx36" name="quest36">a)</label>
				<p class="par">morate je prethodno isprati vodom</p></br>
				<span class="glyphicon glyphicon-remove s36 hider"></span><label class="radio-inline"><input type="radio" id="my36" name="quest36">b)</label>
				<p class="par">morate je prethodno isprati alkoholom</p></br>
				<span class="glyphicon glyphicon-ok s36 hider"></span><label class="radio-inline"><input type="radio" id="m36" name="quest36">c)</label>
				<p class="par">ne smete je isprati</p></br>
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