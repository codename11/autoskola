<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">12. Odredite redosled prolaza:</p></br>
				<img src="images\test\test27.jpg" id="slika"></br>
				<input type="text" id="m12" style="width: 6ch" maxlength="5" name="quest12"><span class="glyphicon s12 hider"></span>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m12').change(function(){
	
		if($("#m12").val()==="21435"){
			$(".s12").addClass("glyphicon-ok");
			$(".s12").removeClass("hider");
			$('input[name="quest12"]').attr('disabled', 'disabled');
		}
		else{
			$(".s12").addClass("glyphicon-remove");
			$(".s12").removeClass("hider");
			$('input[name="quest12"]').attr('disabled', 'disabled');
		}
});

</script>