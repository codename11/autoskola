<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">21. Na putu sa kolovozom za saobraćaj vozila u oba smera na kome postoje tri saobraćajne trake prilikom preticanja, vozač može da koristi:</p></br>
				<span class="glyphicon glyphicon-remove s21 hider"></span><label class="radio-inline"><input type="radio" id="mx21" name="quest21">a)</label>
				<p class="par">saobraćajnu traku koja se nalazi uz levu ivicu puta u pravcu kretanja vozila</p></br>
				<span class="glyphicon glyphicon-ok s21 hider"></span><label class="radio-inline"><input type="radio" id="m21" name="quest21">b)</label>
				<p class="par">srednju saobraćajnu traku u pravcu kretanja vozila</p></br>
				<span class="glyphicon glyphicon-remove s21 hider"></span><label class="radio-inline"><input type="radio" id="my21" name="quest21">c)</label>
				<p class="par">samo krajnju desnu saobraćajnu traku u pravcu kretanja vozila</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m21').change(function(){

	$(".s21").removeClass("hider");
	$('input[name="quest21"]').attr('disabled', 'disabled');

});

$('input#mx21').change(function(){

	$(".s21").removeClass("hider");
	$('input[name="quest21"]').attr('disabled', 'disabled');

});

$('input#my21').change(function(){

	$(".s21").removeClass("hider");
	$('input[name="quest21"]').attr('disabled', 'disabled');

});

</script>