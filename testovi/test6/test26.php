<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">26. Stvari koje se ne smatraju ručnim prtljagom:</p></br>
				<span class="glyphicon glyphicon-remove s26 hider"></span><label class="radio-inline"><input type="radio" id="mx26" name="quest26">a)</label>
				<p class="par">mogu se smeštati i u delu vozila u kome se nalaze sedišta za putnike</p></br>
				<span class="glyphicon glyphicon-ok s26 hider"></span><label class="radio-inline"><input type="radio" id="m26" name="quest26">b)</label>
				<p class="par">ne mogu se smeštati i u delu vozila u kome se nalaze sedišta za putnike</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m26').change(function(){

	$(".s26").removeClass("hider");
	$('input[name="quest26"]').attr('disabled', 'disabled');

});

$('input#mx26').change(function(){

	$(".s26").removeClass("hider");
	$('input[name="quest26"]').attr('disabled', 'disabled');

});

</script>