<?php
define('MyConst1', TRUE);
include 'header.php';
include 'navbar.php';
?>

<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		<?php
			$myfilename = "secura/novosti.txt";
			if(file_exists($myfilename)){
				echo file_get_contents($myfilename);
			}
		?>
	
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>


<?php include 'footer.php'; ?>
