<?php
	class BookStore{
		public $storeName;
		public $location;
		public $books = array();
		
		function __construct($storeName, $location, $books) {
			$this->storeName = $storeName;
			$this->location = $location;
			$this->books = $books;
		}
	}
	class Book{
		public $bookName;
		public $author;
		function __construct($name, $author) {
			$this->bookName = $name;
			$this->author = $author;
		}

	}
 $books = array();
 $books[] = new Book("Book1", "Author1");
 $books[] = new Book("Book2", "Author2");
 $books[] = new Book("Book3", "Author3");

 $bookStoreObj= new BookStore("ABC Book Store", "xyz", $books);
	

 foreach ($bookStoreObj as $key => $value) 
 {
	print "obj[$key] = $value</br>";
 }

?>