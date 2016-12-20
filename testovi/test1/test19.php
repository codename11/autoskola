<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">19. Dozvoljena brzina putničkog automobila, na putu rezervisanom za saobraćaj motornih vozila, prema opštem ograničenju iznosi:
				<input type="text" id="x4" style="width: 4ch" maxlength="3" name="quest19">km.<span class="glyphicon s19 hider"></span></p>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#x4').change(function(){
	
		if($("#x4").val()==="100"){
			$(".s19").addClass("glyphicon-ok");
			$(".s19").removeClass("hider");
			$('input[name="quest19"]').attr('disabled', 'disabled');
		}
		else{
			$(".s19").addClass("glyphicon-remove");
			$(".s19").removeClass("hider");
			$('input[name="quest19"]').attr('disabled', 'disabled');
		}
});

</script>