<?php
class BookStore implements Iterator {
	public $storeName;
	public $location;
	public $books = array();
	
	function __construct($storeName, $location, $books) {
        $this->storeName = $storeName;
        $this->location = $location;
        $this->books = $books;
    }
	public function rewind()
    {
        reset($this->books);
    }
    public function current()
    {
        //return current($this->books);
		
		$book = current($this->books);
		$book->bookName = "changed ".$book->bookName;
		return $book;
    }
    public function key()
    {
        return key($this->books);
    }
    public function next()
    {
        return next($this->books);
    }
    public function valid()
    {
        return false !== current($this->books);
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
	$bookStoreObj = new BookStore("ABC Book Store", "xyz", $books);
	
	foreach ($bookStoreObj as $book) 
	{
		print "Book Name: ".$book->bookName." Author Name:".$book->author."</br>" ; 
	}
?>