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
				<img src="images\test\test7.jpg" id="slika"></br>
				<span class="glyphicon s12 hider"></span><input type="text" id="x2" style="width: 7ch" maxlength="6" name="quest12">
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#x2').change(function(){
	
		if($("#x2").val()==="235614"){
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