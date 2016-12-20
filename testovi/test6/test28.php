<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">28. Za priključna vozila do 3,5T kočnica sa inercionom komandom:</p></br>
				<span class="glyphicon glyphicon-remove s28 hider"></span><label class="radio-inline"><input type="radio" id="mx28" name="quest28">a)</label>
				<p class="par">nije uopšte dozvoljena</p></br>
				<span class="glyphicon glyphicon-ok s28 hider"></span><label class="radio-inline"><input type="radio" id="m28" name="quest28">b)</label>
				<p class="par">dozvoljena je, ako njihova brzina kretanja ne prelazi 30km/h</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m28').change(function(){

	$(".s28").removeClass("hider");
	$('input[name="quest28"]').attr('disabled', 'disabled');

});

$('input#mx28').change(function(){

	$(".s28").removeClass("hider");
	$('input[name="quest28"]').attr('disabled', 'disabled');

});

</script>