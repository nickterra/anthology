<?php
include("includes/config.php");
include("includes/classes/Author.php");
include("includes/classes/Book.php");
include("includes/classes/Track.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])){
	$userLoggedIn = $_SESSION['userLoggedIn'];
	echo "<script>userLoggedIn = '$userLoggedIn';</script>";
}
else{
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welome to Anthology!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
	
</head>
<body>
	
	<div id="mainContainer">
		<div id="topContainer">
			<?php include("includes/navBarContainer.php"); ?>
			<div id= "mainViewContainer">
				<div id="mainContent">