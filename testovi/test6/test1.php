<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">1. Javni prevoz putnika i stvari, gradjanin(pojedinac) može vršiti:</p></br>
				<span class="glyphicon glyphicon-remove s1 hider"></span><label class="radio-inline"><input type="radio" id="mx1" name="quest1">a)</label>
				<p class="par">samo jednim vozilom koji je u njegovoj svojini</p></br>
				<span class="glyphicon glyphicon-ok s1 hider"></span><label class="radio-inline"><input type="radio" id="m1" name="quest1">b)</label>
				<p class="par">sa više vozila ukoliko su u njegovoj svojini</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m1').change(function(){

	$(".s1").removeClass("hider");
	$('input[name="quest1"]').attr('disabled', 'disabled');

});

$('input#mx1').change(function(){

	$(".s1").removeClass("hider");
	$('input[name="quest1"]').attr('disabled', 'disabled');

});

</script>