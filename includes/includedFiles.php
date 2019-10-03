<?php

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	include("includes/config.php");
	include("includes/classes/Author.php");
	include("includes/classes/Book.php");
	include("includes/classes/Track.php");
}
else {
	include("includes/header.php");
	include("includes/footer.php");
	
	$url = $_SERVER['REQUEST_URI'];
	echo "<script>openPage('$url')</script>";
	exit();
}

?>