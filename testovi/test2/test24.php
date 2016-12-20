<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">24. Parkiranje i zaustavljanje kod obeleženog pešačkog prelaza je zabranjeno na udaljenosti manjoj od <input type="text" id="m24" style="width: 2ch" maxlength="1" name="quest24">m.<span class="glyphicon s24 hider"></span></p></br>	
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>
	$('input#m24').change(function(){
	
		if($("#m24").val()==="5"){
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