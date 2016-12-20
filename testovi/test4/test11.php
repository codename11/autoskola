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
				<img src="images\test\test36.jpg" id="slika"></br>
				<input type="text" id="m11" style="width: 6ch" maxlength="5" name="quest11"><span class="glyphicon s11 hider"></span>	
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m11').change(function(){
	
		if($("#m11").val()==="51234"){
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