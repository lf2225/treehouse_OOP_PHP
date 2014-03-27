
<?php
class Book{

	public $name = 'name';
	public $author = 'author';
	public $price = 'price';
	
	function __construct($name, $author, $price){
		$this->name = $name;
		$this->author = $author;
		$this->price = $price;
	}	
	public function getInfo(){
		return "Book Name: ". $this->name;
	}
}

class NonFiction extends Book{

	public $genre;

	function __construct($name, $author, $price, $genre){
		parent::__construct($name, $author, $price);
		$this->genre = $genre;
	}

	public function getInfo(){
		return "Book Name: ". $this->name . "Non-Fiction Genre: ". $this->genre;
	}
}

$waves = new NonFiction("The Three Hours", "Peter Maas", "$20", "Military");

echo $waves->getInfo();

?>