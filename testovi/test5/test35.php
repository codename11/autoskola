<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">35. Pri veštačkom disanju metodom "usta na usta" kod male dece:</p></br>
				<span class="glyphicon glyphicon-remove s35 hider"></span><label class="radio-inline"><input type="radio" id="mx35" name="quest35">a)</label>
				<p class="par">potrebno je palcem i kažiprstom zatvoriti nosnice</p></br>
				<span class="glyphicon glyphicon-ok s35 hider"></span><label class="radio-inline"><input type="radio" id="m35" name="quest35">b)</label>
				<p class="par">može se istovremeno uduvavati vazduh kroz nos i usta</p></br>
				<span class="glyphicon glyphicon-remove s35 hider"></span><label class="radio-inline"><input type="radio" id="my35" name="quest35">c)</label>
				<p class="par">vazduh se uduvava samo kroz nos</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m35').change(function(){

	$(".s35").removeClass("hider");
	$('input[name="quest35"]').attr('disabled', 'disabled');

});

$('input#mx35').change(function(){

	$(".s35").removeClass("hider");
	$('input[name="quest35"]').attr('disabled', 'disabled');

});

$('input#my35').change(function(){

	$(".s35").removeClass("hider");
	$('input[name="quest35"]').attr('disabled', 'disabled');

});

</script>