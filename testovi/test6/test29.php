<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">29. Autobusi, trolejbusi i priključna vozila kojima se vrši prevoz putnika, moraju da imaju na vidnom mestu postavljen čekić za razbijanje stakla u slučaju opasnosti, ako imaju preko <input type="text" id="m29" style="width: 3ch" maxlength="2" name="quest29">sedišta.<span class="glyphicon s29 hider"></span></p>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m29').change(function(){
	
		if($("#m29").val()==="25"){
			$(".s29").addClass("glyphicon-ok");
			$(".s29").removeClass("hider");
			$('input[name="quest29"]').attr('disabled', 'disabled');
		}
		else{
			$(".s29").addClass("glyphicon-remove");
			$(".s29").removeClass("hider");
			$('input[name="quest29"]').attr('disabled', 'disabled');
		}
});

</script>