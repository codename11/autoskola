<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">34. Prilikom pregleda ustanovljeno je da je kod povredjenog nastupio prestanak disanja i rada srca, potrebno je uraditi:</p></br>
				<span class="glyphicon glyphicon-remove s34 hider"></span><label class="radio-inline"><input type="radio" id="mx34" name="quest34">a)</label>
				<p class="par">obavestiti telefonom hitnu pomoć</p></br>
				<span class="glyphicon glyphicon-remove s34 hider"></span><label class="radio-inline"><input type="radio" id="my34" name="quest34">b)</label>
				<p class="par">prvo pozvati policiju</p></br>
				<span class="glyphicon glyphicon-ok s34 hider"></span><label class="radio-inline"><input type="radio" id="m34" name="quest34">c)</label>
				<p class="par">odmah započeti sa veštačkim disanjem i masažom srca</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
</div></br>
<script>
	$('input#m34').change(function(){

	$(".s34").removeClass("hider");
	$('input[name="quest34"]').attr('disabled', 'disabled');

});

$('input#mx34').change(function(){

	$(".s34").removeClass("hider");
	$('input[name="quest34"]').attr('disabled', 'disabled');

});

$('input#my34').change(function(){

	$(".s34").removeClass("hider");
	$('input[name="quest34"]').attr('disabled', 'disabled');

});

</script>