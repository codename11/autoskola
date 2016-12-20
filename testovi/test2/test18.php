<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">18. Uzdužni deo kolovoza namenjen je za saobraćaj vozila u jednom smeru, sa jednom saobraćajnom trakom ili više saobraćajnih traka, prema propisima o bezbednosti saobraćaja, naziva se <input type="text" id="m18" style="width: 16ch" maxlength="15" name="quest18">.<span class="glyphicon s18 hider"></span>(upisati naziv)</p>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m18').change(function(){
	
		if($("#m18").val()==="kolovozna traka"){
			$(".s18").addClass("glyphicon-ok");
			$(".s18").removeClass("hider");
			$('input[name="quest18"]').attr('disabled', 'disabled');
		}
		else{
			$(".s18").addClass("glyphicon-remove");
			$(".s18").removeClass("hider");
			$('input[name="quest18"]').attr('disabled', 'disabled');
		}
});

</script>