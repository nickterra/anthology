<?php 
include("includes/header.php"); 
?>

<h1 class="pageHeadingBig">You Might Also Like</h1>
<div calss="gridViewContainer">
	<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM books  ORDER BY RAND() LIMIT 10");
		
		while($row = mysqli_fetch_array($albumQuery)){
			echo "<div class = 'gridViewItem'>
				<a href='album.php?id=" . $row['id'] . "'>
					<img src='". $row['artworkPath'] ."'>
					<div class='griViewInfo'>"
						. $row['title'] .
					"</div>
					</a>
				</div>";
		}
	?>
</div>
<?php include("includes/footer.php"); ?>