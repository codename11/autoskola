<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">36. Povredjenog koji krvari(bilo da je spoljašnje ili unutrašnje) ćete prepoznati po tome što:</p></br>
				<span class="glyphicon glyphicon-ok s36 hider"></span><label class="radio-inline"><input type="radio" id="m36" name="quest36">a)</label>
				<p class="par">ima hladnu, belu kožu orošenu znojem, usne i jezik su mu suvi</p></br>
				<span class="glyphicon glyphicon-remove s36 hider"></span><label class="radio-inline"><input type="radio" id="mx36" name="quest36">b)</label>
				<p class="par">koža ima crvenu boju, suva je, usne i jezik su mu vlažni</p></br>
				<span class="glyphicon glyphicon-remove s36 hider"></span><label class="radio-inline"><input type="radio" id="my36" name="quest36">c)</label>
				<p class="par">koža ima tamnu boju, suva je, usne su mu crvene</p></br>
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