<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">18. Svaki prekid kretanja vozila na putu u trajanju do 15min., osim prekida koji se vrši da bi se postupilo po znaku ili pravilu kojim se reguliše saobraćaj, prema propisima o bezbednosti saobraćaja smatra se <input type="text" id="m18" style="width: 12ch" maxlength="13" name="quest18">.<span class="glyphicon s18 hider"></span> (upisati naziv)</p>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m18').change(function(){
	
		if($("#m18").val()==="zaustavljanje"){
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