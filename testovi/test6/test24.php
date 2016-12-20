<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">24. Vozač autobusa, teretnog motornog vozila ili skupa vozila čija je najveća dozvoljena masa 20 tona, kada u toku 24 časa prelazi više od 500km, mora biti zamenjen drugim vozačem najkasnije nakon predjenih <input type="text" id="m24" style="width: 4ch" maxlength="3" name="quest24">km puta.<span class="glyphicon s24 hider"></span></p>	
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m24').change(function(){
	
		if($("#m24").val()==="500"){
			$(".s24").addClass("glyphicon-ok");
			$(".s24").removeClass("hider");
			$('input[name="quest24"]').attr('disabled', 'disabled');
		}
		else{
			$(".s24").addClass("glyphicon-remove");
			$(".s24").removeClass("hider");
			$('input[name="quest24"]').attr('disabled', 'disabled');
		}
});

</script>