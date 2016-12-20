<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">21. Smatraće se da je pod uticajem alkohola vozač koji vrši javni prevoz motornim vozilom:</p></br>
				<span class="glyphicon glyphicon-remove s21 hider"></span><label class="radio-inline"><input type="radio" id="mx21" name="quest21">a)</label>
				<p class="par">samo ako sadržina alkohola u krvi iznosi 0,5g/kg</p></br>
				<span class="glyphicon glyphicon-ok s21 hider"></span><label class="radio-inline"><input type="radio" id="m21" name="quest21">b)</label>
				<p class="par">ako u organizmu ima bilo koju količinu alkohola ili ako pokazuje znake alkoholne premećenosti</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m21').change(function(){

	$(".s21").removeClass("hider");
	$('input[name="quest21"]').attr('disabled', 'disabled');

});

$('input#mx21').change(function(){

	$(".s21").removeClass("hider");
	$('input[name="quest21"]').attr('disabled', 'disabled');

});

</script>