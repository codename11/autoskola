<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">39. Ako se prevoz putnika vrši u stojećem stavu, slobodna površina za jedno mesto za stajanje mora iznositi:</p></br>
				<span class="glyphicon glyphicon-ok s39 hider"></span><label class="radio-inline"><input type="radio" id="m39" name="quest39">a)</label>
				<p class="par">najmanje 0,15m</p></br>
				<span class="glyphicon glyphicon-remove s39 hider"></span><label class="radio-inline"><input type="radio" id="mx39" name="quest39">b)</label>
				<p class="par">najmanje 0,30m</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m39').change(function(){

	$(".s39").removeClass("hider");
	$('input[name="quest39"]').attr('disabled', 'disabled');

});

$('input#mx39').change(function(){

	$(".s39").removeClass("hider");
	$('input[name="quest39"]').attr('disabled', 'disabled');

});

</script>