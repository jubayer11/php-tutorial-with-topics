<?php
class BookStore implements IteratorAggregate {
	public $storeName;
	public $location;
	public $books = array();
	
	function __construct($storeName, $location, $books) {
        $this->storeName = $storeName;
        $this->location = $location;
        $this->books = $books;
    }
	
	function getIterator()
    {
        return new BookIterator($this->books);
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

class BookIterator implements Iterator{
	
	public  $collection= array();
	
	function __construct($obj) {
        $this->collection = $obj;

    }
	
	public function rewind()
    {
        reset($this->collection);
    }
    public function current()
    {
        $book = current($this->collection);
		$book->bookName = "changed ".$book->bookName;
		return $book;
    }
    public function key()
    {
        return key($this->collection);
    }
    public function next()
    {
        return next($this->collection);
    }
    public function valid()
    {
        return false !== current($this->collection);
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