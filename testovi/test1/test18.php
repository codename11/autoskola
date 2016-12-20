<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">18. Površina na kojoj se ukrštaju ili spajaju dva ili više puteva, kao i šira saobraćajna površina(trgovi i sl.) koja nastaje ukrštanjem odnosno spajanjem puteva, prema propisima o bezbednosti saobraćaja naziva se:
				<input type="text" id="x3" style="width: 11ch" maxlength="10" name="quest18"> .<span class="glyphicon s18 hider"></span></p>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#x3').change(function(){
	
		if($("#x3").val()==="raskrsnica"){
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