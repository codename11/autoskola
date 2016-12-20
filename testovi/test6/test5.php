<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">5. Vozači kojima je izdata dozvola za upravljanje motornim vozilima "D" kategorije, pored rokova za vozače "C", dužni su da se podvrgnu vandrednom zdravstvenom kontrolnom pregledu:</p></br>
				<span class="glyphicon glyphicon-remove s5 hider"></span><label class="radio-inline"><input type="radio" id="mx5" name="quest5">a)</label>
				<p class="par">samo ako sami primete znakove nekog novog ozbiljnijeg fizičkog ili psihičkog oboljenja</p></br>
				<span class="glyphicon glyphicon-ok s5 hider"></span><label class="radio-inline"><input type="radio" id="m5" name="quest5">b)</label>
				<p class="par">pre svakog produženja važenja vozačke dozvole</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m5').change(function(){

	$(".s5").removeClass("hider");
	$('input[name="quest5"]').attr('disabled', 'disabled');

});

$('input#mx5').change(function(){

	$(".s5").removeClass("hider");
	$('input[name="quest5"]').attr('disabled', 'disabled');

});

</script>