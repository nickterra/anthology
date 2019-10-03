<?php
	class Track{
		
		private $con;
		private $id;
		private $mysqliData;
		private $title;
		private $authorId;
		private $bookId;
		private $genre;
		private $duration;
		private $path;
		
		public function __construct($con, $id){
			$this->con = $con;
			$this->id = $id;

			$query = mysqli_query($this->con, "SELECT * FROM tracks WHERE id='$this->id'");
			$this->mysqliData = mysqli_fetch_array($query);
			$this->title = $this->mysqliData['title'];
			$this->authorId = $this->mysqliData['author'];
			$this->bookId = $this->mysqliData['book'];
			$this->genre = $this->mysqliData['genre'];
			$this->duration = $this->mysqliData['duration'];
			$this->path = $this->mysqliData['path'];
		}
		
		 public function getTitle(){
			return $this->title;
		 }
		 public function getId(){
			return $this->id;
		 }
		 public function getAuthor(){
			return new Author($this->con, $this->authorId);
		 }
		 public function getBook(){
			return new Book($this->con, $this->bookId);
		 }		 
		 public function getPath(){
			return $this->path;
		 }
		 public function getDuration(){
			return $this->duration;
		 }
		 public function getMysqliData(){
			return $this->mysqliData;
		 }
		 public function getGenre(){
			return $this->genre;
		 }
	}
?>