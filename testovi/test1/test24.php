<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<div class="row form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="tst">
				<p class="par">24. Odstojanje izmedju neispravnog vozila i vozila koje ga vuče pomoću užeta iznosi od <input type="text" id="x5" style="width: 3ch" maxlength="1" name="quest24"> do <input type="text" id="x6" style="width: 3ch" maxlength="1" name="quest24">m.(upisati koliko metara)<span class="glyphicon s24 hider"></span></p>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div></br>
<script>

var pl1=$("#x5").val();
var pl2=$("#x6").val();
	
$('input#x5').change(function(){
		
	$('input#x6').change(function(){
	
		if($("#x5").val()==="3" && $("#x6").val()==="5"){
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

$('input#x6').change(function(){
		
	$('input#x5').change(function(){
	
		if($("#x5").val()==="3" && $("#x6").val()==="5"){
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