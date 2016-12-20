<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">23. Više uzastopnih zvižduka pištaljkom lica koje reguliše saobraćaj ima značenje:</p></br>
				<span class="glyphicon glyphicon-ok s23 hider"></span><label class="radio-inline"><input type="radio" id="m23" name="quest23">a)</label>
				<p class="par">da je neki od učesnika u saobraćaju postupio protivno zahtevu izraženom pomoću datog znaka, pravilima saobraćaja ili postavljenom saobraćajnom znaku</p></br>
				<span class="glyphicon glyphicon-remove s23 hider"></span><label class="radio-inline"><input type="radio" id="mx23" name="quest23">b)</label>
				<p class="par">poziv učesnicima u saobraćaju da obrate pažnju na ovlašćeno lice koje će pomoću odgovarajućeg znaka izraziti odgovarajući zahtev</p></br>
				<span class="glyphicon glyphicon-remove s23 hider"></span><label class="radio-inline"><input type="radio"  id="my23" name="quest23">c)</label>
				<p class="par">da se svi učesnici u saobraćaju što pre uklone sa kolovoza</p></br>
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