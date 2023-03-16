<?php 

require_once __DIR__."/product.php";

class Food extends Product{

    public $expiration;

    function __construct(
        string $name, 
        float $price, 
        string $image, 
        int $amount, 
        Category $category,
        string $expiration
        )
    {
        parent::__construct(
            $name,
            $price,
            $image, 
            $amount,
            $category
        );

        $this->expiration = $expiration;
    }

}

?>