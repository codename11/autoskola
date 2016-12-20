<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">13. Saobraćajni znak na slici:</p></br>
				<img src="images\test\test8.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-remove s13 hider"></span><label class="radio-inline"><input type="radio" id="mx13" name="quest13">a)</label>
				<p class="par">preporučuje vozačima odredjenu brzinu</p></br>
				<span class="glyphicon glyphicon-ok s13 hider"></span><label class="radio-inline"><input type="radio" id="m13" name="quest13">b)</label>
				<p class="par">zabranjuje vozačima kretanje većom brzinom od brzine koja je označena na znaku</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m13').change(function(){

	$(".s13").removeClass("hider");
	$('input[name="quest13"]').attr('disabled', 'disabled');

});

$('input#mx13').change(function(){

	$(".s13").removeClass("hider");
	$('input[name="quest13"]').attr('disabled', 'disabled');

});

</script>