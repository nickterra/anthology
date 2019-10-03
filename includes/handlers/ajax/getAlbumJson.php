<?php
include("../../config.php");

if(isset($_POST['bookId'])) {
	$bookId = $_POST['bookId'];
	
	$query = mysqli_query($con, "SELECT * FROM books WHERE id='$bookId'");
	
	$resultArray = mysqli_fetch_array($query);
	
	echo json_encode($resultArray);
}

?>