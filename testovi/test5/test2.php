<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">2. Saobraćajni znak "prestanak zabrane preticanja svih vozila na motorni pogon, osim motocikala bez prikolice":</p></br>
				<span class="glyphicon glyphicon-remove s2 hider"></span><label class="radio-inline"><input type="radio" name="quest2">a)</label>
				<p class="par">odnosi se na vozača koji vrši preticanje</p></br>
				<span class="glyphicon glyphicon-ok s2 hider"></span><label class="radio-inline"><input type="radio" id="m2" name="quest2">b)</label>
				<p class="par">odnosi se na vozača koji dolazi iz suprotnog smera, odnosno na vozača prema kojem je znak okrenut</p></br>
				<span class="glyphicon glyphicon-remove s2 hider"></span><label class="radio-inline"><input type="radio" name="quest2">c)</label>
				<p class="par">odnosi se na oba vozača</p></br>
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