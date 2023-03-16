<?php 

require_once __DIR__."/product.php"; 

class Toy extends Product{

    public $material;

    function __construct(
        string $name, 
        float $price, 
        string $image, 
        int $amount, 
        Category $category,
        string $material
        )
    {
        parent::__construct(
            $name,
            $price,
            $image, 
            $amount,
            $category
        );

        $this->material = $material;
    }
    
}

?>