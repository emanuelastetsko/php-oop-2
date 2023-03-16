<?php 

class Product {

    // public $id 
    public $name;
    public $price;
    public $image;
    public $amount;
    public $category;

    function __construct(
        string $name, 
        float $price, 
        string $image, 
        int $amount, 
        Category $category   // Dependency Injection
        )
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->amount = $amount;
        $this->category = $category;
    }

}