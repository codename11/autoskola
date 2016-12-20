<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">24. Svetla na zadnjoj strani vozila su <input type="text" id="m24" style="width: 7ch" maxlength="6" name="quest24"> boje.<span class="glyphicon s24 hider"></span>(upisati boju svetla)</p></br>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m24').change(function(){
	
		if($("#m24").val()==="crvene"){
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