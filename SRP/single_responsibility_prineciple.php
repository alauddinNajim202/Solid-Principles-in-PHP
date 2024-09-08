<?php

// define product class

class Product{
    private string $name;
    private string $color;
    private float $price;


    public function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function get_price(){
        return $this->price;
    }

    public function product_information(){
        echo "Product Information". "<br/>";
        echo "Name : ". $this->name . "<br/>";
        echo "Color : ". $this->color . "<br/>";
        echo "Price : ". $this->price. "<br/>";
    }
}

$product = new Product('Laptop','Red',200);
$product->product_information();

?>
