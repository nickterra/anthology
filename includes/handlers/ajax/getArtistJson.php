<?php
include("../../config.php");

if(isset($_POST['authorId'])) {
	$authorId = $_POST['authorId'];
	
	$query = mysqli_query($con, "SELECT * FROM authors WHERE id='$authorId'");
	
	$resultArray = mysqli_fetch_array($query);
	
	echo json_encode($resultArray);
}

?>