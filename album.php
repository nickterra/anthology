<?php include("includes/header.php"); 

if (isset($_GET['id'])){
	$bookId = $_GET['id'];
}
else{
	header("Location: index.php");
}

$book = new Book($con, $bookId);
$author = $book->getAuthor();
?>

<div class="entityInfo">

	<div class ="leftSection">
		<img src="<?php echo $book->getArtworkPath();?>">
	</div>
	<div class="rightSection">
		<h2><?php echo $book->getTitle();?></h2>
		<p>By <?php echo $author->getName();?></p>
		<p><?php echo $book->getNumberOfSongs();?></p>
	</div>
</div>

<div class="tracklistContainer">
	<ul class="tracklist">
		<?php
			$songIdArray = $book->getSongIds();
			
			$i = 1;
			foreach($songIdArray as $songId){
				$albumSong = new Track($con, $songId);
				$albumArtist = $albumSong->getAuthor();
				
				//echo $albumSong->getTitle();
				echo "<li class = 'tracklistRow'>
					<div class='trackCount'>
						<img class='play' src='assets/images/icons/play-white.png' onclick='setTrack(\"" . $albumSong->getId() . "\", tempPlaylist, true)'>
						<span class='trackNumber'>$i</span>
					</div>
					
					<div class='trackInfo'>
						<span class='trackName'>" . $albumSong->getTitle() . "</span>
						<span class='authorName'>" . $albumArtist->getName() . "</span>
					</div>		

					<div class='trackOptions'>
						<img class='optionsButton' src='assets/images/icons/more.png'>
					</div>		
										
					<div class='trackDurations'>
						<span class='duration'>" . $albumSong->getDuration() . "</span>
					</div>		
				</li>";
				
			$i = $i +1;
			}
		?>
		<script>
			var tempSongIds = '<?php echo json_encode($songIdArray); ?>';
			tempPlaylist = JSON.parse(tempSongIds);
		</script>
	</ul>
</div>

<?php include("includes/footer.php"); ?>