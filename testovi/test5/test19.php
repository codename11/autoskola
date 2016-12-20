<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">19. Prema opštem ograničenju brzine, dozvoljena brzina putničkog automobila na auto-putu iznosi <input type="text" id="m19" style="width: 4ch" maxlength="3" name="quest19">km/h.<span class="glyphicon s19 hider"></span></p>	
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m19').change(function(){
	
		if($("#m19").val()==="120"){
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