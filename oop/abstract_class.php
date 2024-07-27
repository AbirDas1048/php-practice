<?php
abstract class Product
{
    protected $name;
    protected $price;
    private $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

    abstract public function display();

    protected function showCategory(): void{
        echo "Category: $this->category.\n";
    }

    public function discount($percentage): float{
        return ($this->price - (($this->price * $percentage)/100));
    }
}

class Book extends Product{
    private $author;
    private $genre;

    public function __construct($name, $price, $author, $genre){
        parent::__construct('Book');
        $this->name = $name;
        $this->price = $price;
        $this->author = $author;
        $this->genre = $genre;
    }

    public function display(): void{
        echo "Name: $this->name.\n";
        echo "Author: $this->author.\n";
        echo "Genre: $this->genre.\n";
        $this->showCategory();
        echo "Price: $this->price.\n";
    }
}

class Electronics extends Product{
    private $manufacturer;
    private $specifications;

    public function __construct($name, $price, $manufacturer, $specifications) {
        parent::__construct('Electronics');
        $this->name = $name;
        $this->price = $price;
        $this->manufacturer = $manufacturer;
        $this->specifications = $specifications;
    }

    public function display(): void{
        echo "Name: $this->name.\n";
        echo "manufacturer: $this->manufacturer.\n";
        echo "specifications: $this->specifications.\n";
        $this->showCategory();
        echo "Price: $this->price.\n";
    }
}

$book1 = new Book('Book 1', 100,'Author 1', 'Genre 1');
$book2 = new Book('Book 2', 300, 'Author 2', 'Genre 2');

$book1->display();
echo "Discounted Price: {$book1->discount(10)}\n";

echo PHP_EOL;

$book2->display();
echo "Discounted Price: {$book2->discount(5)}\n";

echo PHP_EOL;

$electronics1 = new Electronics('Mobile', '10000', 'Samsung', '4GB Ram, 64GB Phone Memory');
$electronics1->display();

echo PHP_EOL;

$electronics2 = new Electronics('Mobile', '20000', 'Samsung', '6GB Ram, 128GB Phone Memory');
$electronics2->display();
echo "Discounted Price: {$electronics2->discount(2)}\n";