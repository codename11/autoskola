<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">6. Saobraćajnim znakom na slici, zabranjeno je preticanje:</p></br>
				<span class="glyphicon glyphicon-remove s6 hider"></span><label class="radio-inline"><input type="radio" id="mx6" name="quest6">a)</label>
				<p class="par">svih vozila na motorni pogon</p></br>
				<span class="glyphicon glyphicon-remove s6 hider"></span><label class="radio-inline"><input type="radio" id="my6" name="quest6">b)</label>
				<p class="par">samo motornih vozila preko 3,5T</p></br>
				<span class="glyphicon glyphicon-ok s6 hider"></span><label class="radio-inline"><input type="radio" id="m6" name="quest6">c)</label>
				<p class="par">svih vozila na motorni pogon, osim motocikala bez prikolice</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m6').change(function(){

	$(".s6").removeClass("hider");
	$('input[name="quest6"]').attr('disabled', 'disabled');

});

$('input#mx6').change(function(){

	$(".s6").removeClass("hider");
	$('input[name="quest6"]').attr('disabled', 'disabled');

});

$('input#my6').change(function(){

	$(".s6").removeClass("hider");
	$('input[name="quest6"]').attr('disabled', 'disabled');

});
</script>