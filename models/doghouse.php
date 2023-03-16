<?php 

require_once __DIR__."/product.php";

class DogHouse extends Product{

    public $size;

    function __construct(
        string $name, 
        float $price, 
        string $image, 
        int $amount, 
        Category $category,
        string $size
        )
    {
        parent::__construct(
            $name,
            $price,
            $image, 
            $amount,
            $category
        );

        $this->size = $size;
    }

}

?>