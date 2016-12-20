<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">16. Crveni katadiopteri na priključnom vozilu su:</p></br>
				<span class="glyphicon glyphicon-remove s16 hider"></span><label class="radio-inline"><input type="radio" id="mx16" name="quest16">a)</label>
				<p class="par">okrugli</p></br>
				<span class="glyphicon glyphicon-ok s16 hider"></span><label class="radio-inline"><input type="radio" id="m16" name="quest16">b)</label>
				<p class="par">u obliku ravnostranog trougla sa vrhom okrenutim naviše</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m16').change(function(){

	$(".s16").removeClass("hider");
	$('input[name="quest16"]').attr('disabled', 'disabled');

});

$('input#mx16').change(function(){

	$(".s16").removeClass("hider");
	$('input[name="quest16"]').attr('disabled', 'disabled');

});

</script>