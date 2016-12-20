<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">2. Na istoj slici vozilo kao u prethodnom pitanju, koje se kreće iz suprotnog smera, kreće se propisno:</p></br>
				<span class="glyphicon glyphicon-remove s2 hider"></span><label class="radio-inline"><input type="radio" id="mx2" name="quest2">a)</label>
				<p class="par">uz razdelnu liniju</p></br>
				<span class="glyphicon glyphicon-ok s2 hider"></span><label class="radio-inline"><input type="radio" id="m2" name="quest2">b)</label>
				<p class="par">uz desnu ivicu kolovoza</p></br>
				<span class="glyphicon glyphicon-remove s2 hider"></span><label class="radio-inline"><input type="radio" id="my2" name="quest2">c)</label>
				<p class="par">bilo uz levu, bilo uz desnu ivicu kolovoza</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m2').change(function(){

	$(".s2").removeClass("hider");
	$('input[name="quest2"]').attr('disabled', 'disabled');

});

$('input#mx2').change(function(){

	$(".s2").removeClass("hider");
	$('input[name="quest2"]').attr('disabled', 'disabled');

});

$('input#my2').change(function(){

	$(".s2").removeClass("hider");
	$('input[name="quest2"]').attr('disabled', 'disabled');

});
</script>