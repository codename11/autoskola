<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">40. U vozilu kojim se prevoze opasne materije smeju se prevoziti:</p></br>
				<span class="glyphicon glyphicon-remove s40 hider"></span><label class="radio-inline"><input type="radio" id="mx40" name="quest40">a)</label>
				<p class="par">samo vozač i suvozač</p></br>
				<span class="glyphicon glyphicon-ok s40 hider"></span><label class="radio-inline"><input type="radio" id="m40" name="quest40">b)</label>
				<p class="par">vozač, suvozač i pratilac</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m40').change(function(){

	$(".s40").removeClass("hider");
	$('input[name="quest40"]').attr('disabled', 'disabled');

});

$('input#mx40').change(function(){

	$(".s40").removeClass("hider");
	$('input[name="quest40"]').attr('disabled', 'disabled');

});

</script>