<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">14. Saobraćajni znak na slici označava da je ukrštanje puta sa prugom u nivou:</p></br>
				<img src="images\test\test39.jpg" id="slika"></br>
				<span class="glyphicon glyphicon-ok s14 hider"></span><label class="radio-inline"><input type="radio" id="m14" name="quest14">a)</label>
				<p class="par">sa branikom ili polu branikom</p></br>
				<span class="glyphicon glyphicon-remove s14 hider"></span><label class="radio-inline"><input type="radio" id="mx14" name="quest14">b)</label>
				<p class="par">bez branika ili polubranika</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m14').change(function(){

	$(".s14").removeClass("hider");
	$('input[name="quest14"]').attr('disabled', 'disabled');

});

$('input#mx14').change(function(){

	$(".s14").removeClass("hider");
	$('input[name="quest14"]').attr('disabled', 'disabled');

});

</script>