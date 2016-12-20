<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">22. Pismeno uputstvo o posebnim merama bezbednosti koje prilikom prevoza opasnih materija treba da preuzmu, pošiljalac je dužan da pripremi i preda:</p></br>
				<span class="glyphicon glyphicon-ok s22 hider"></span><label class="radio-inline"><input type="radio" id="m22" name="quest22">a)</label>
				<p class="par">prevozniku, odnosno vozaču</p></br>
				<span class="glyphicon glyphicon-remove s22 hider"></span><label class="radio-inline"><input type="radio" id="mx22" name="quest22">b)</label>
				<p class="par">licu ili organizaciji kojoj je upućeno</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m22').change(function(){

	$(".s22").removeClass("hider");
	$('input[name="quest22"]').attr('disabled', 'disabled');

});

$('input#mx22').change(function(){

	$(".s22").removeClass("hider");
	$('input[name="quest22"]').attr('disabled', 'disabled');

});

</script>