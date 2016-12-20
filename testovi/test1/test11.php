<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">11. Odredite redosled prolaza:</p></br>
				<img src="images\test\test6.jpg" id="slika"></br>
				<span class="glyphicon s11 hider"></span><input type="text" id="x1" style="width: 7ch" maxlength="5" name="quest11">
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#x1').change(function(){
	
		if($("#x1").val()==="45123"){
			$(".s11").addClass("glyphicon-ok");
			$(".s11").removeClass("hider");
			$('input[name="quest11"]').attr('disabled', 'disabled');
		}
		else{
			$(".s11").addClass("glyphicon-remove");
			$(".s11").removeClass("hider");
			$('input[name="quest11"]').attr('disabled', 'disabled');
		}
});

</script>
