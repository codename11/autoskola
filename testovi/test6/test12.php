<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">12. Ako po danu dodje do kvara na vozilu kojim se prevoze opasne materije, vozač je dužan da preduzme sve mere da ne dovede u opasnost druga vozila, odnosno da iza zaustavljenog vozila postavi:</p></br>
				<span class="glyphicon glyphicon-remove s12 hider"></span><label class="radio-inline"><input type="radio" id="mx12" name="quest12">a)</label>
				<p class="par">posebnu zastavicu sa znakom opasnih materija</p></br>
				<span class="glyphicon glyphicon-ok s12 hider"></span><label class="radio-inline"><input type="radio" id="m12" name="quest12">b)</label>
				<p class="par">dva znaka kojim se označava motorno vozilo zaustavljeno na putu</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m12').change(function(){

	$(".s12").removeClass("hider");
	$('input[name="quest12"]').attr('disabled', 'disabled');

});

$('input#mx12').change(function(){

	$(".s12").removeClass("hider");
	$('input[name="quest12"]').attr('disabled', 'disabled');

});

</script>