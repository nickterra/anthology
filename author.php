<?php
include("includes/includedFile.php");

 if(isset($_GET['id'])){
	 $authorId = $_GET['id'];
 }
 else{
	 header("Location: index.php");
 }
 
 $author = new Author($con, $authorId);
?>

<div class="entityInfo">
	<div class="centerSection">
		<div class="artistInfo">
			<h1 class="artistName"><?php echo $author->getName(); ?></h1>
			<div class="headerButtons">
				<button class="button green"></button>
			</div>
		</div>
	</div>
</div>