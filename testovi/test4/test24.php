<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">24. Oborena svetla na putničkom automobilu bacaju snop od <input type="text" id="z1" style="width: 3ch" maxlength="2" name="quest24"> do <input type="text" id="z2" style="width: 3ch" maxlength="2" name="quest24">m.<span class="glyphicon s24 hider"></span></p>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>

var pl1=$("#z1").val();
var pl2=$("#z2").val();
	
$('input#z1').change(function(){
		
	$('input#z2').change(function(){
	
		if($("#z1").val()==="40" && $("#z2").val()==="80"){
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
});	

$('input#z2').change(function(){
		
	$('input#z1').change(function(){
	
		if($("#z1").val()==="40" && $("#z2").val()==="80"){
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
});

</script>
