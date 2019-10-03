<?php
	class Book{
		
		private $con;
		private $id;
		private $title;
		private $authorId;
		private $genre;
		private $artworkPath;
		
		public function __construct($con, $id){
			$this->con = $con;
			$this->id = $id;

			$query = mysqli_query($this->con, "SELECT * FROM books WHERE id='$this->id'");
			$book = mysqli_fetch_array($query); 
			
			$this->title = $book['title'];
			$this->authorId = $book['artist'];
			$this->genre = $book['genre'];
			$this->artworkPath = $book['artworkPath'];
		}
		
		 public function getTitle(){
			return $this->title;
		 }
		 
		 public function getAuthor(){
			return new Author($this->con, $this->authorId);
		 }
		 
		public function getGenre() {
			return $this->genre;
		}

		public function getArtworkPath() {
			return $this->artworkPath;
		}

		public function getNumberOfSongs() {
			$query = mysqli_query($this->con, "SELECT * FROM tracks WHERE id='$this->id'");
			return mysqli_num_rows($query);
		}
		
		public function getSongIds(){
			$query = mysqli_query($this->con, "SELECT id FROM tracks WHERE book ='$this->id' ORDER BY albumOrder ASC");
			$array = array();
			
			while($row = mysqli_fetch_array($query)){
				array_push($array, $row['id']);
			}
			
			return $array;
		}
	}
?>