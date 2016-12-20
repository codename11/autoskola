<?php

	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	echo "<a href='logout.php' type='submit' style='padding-left: 10px; color: black' class='btn btn-default podaci' name='logout'>Logout</a>";
}

?>