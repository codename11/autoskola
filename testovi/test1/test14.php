<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">14. Dopunska tabla ispod saobraćajnog znaka označava:</p></br>
				<span class="glyphicon glyphicon-remove s14 hider"></span><label class="radio-inline"><input type="radio" id="mx14" name="quest14">a)</label>
				<p class="par">udaljenost izmedju znaka i početka primene ograničenja brzine na saobraćajnom znaku</p></br>
				<span class="glyphicon glyphicon-ok s14 hider"></span><label class="radio-inline"><input type="radio" id="m14" name="quest14">b)</label>
				<p class="par">dužinu dela puta od saobraćajnog znaka na koji se zabrana odnosi</p></br>
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