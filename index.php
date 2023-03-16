<?php 

    require_once __DIR__."/models/category.php";
    require_once __DIR__."/models/product.php";
    require_once __DIR__."/models/food.php";
    require_once __DIR__."/models/doghouse.php";
    require_once __DIR__."/models/toy.php";

    $dogCategory = new Category(
        "Dog",
        "🐶"
    );

    $catCategory = new Category(
        "Cat",
        "🐱"
    );

    $products = [];

    $products[] = new Food(
        "Crocchette PRO PLAN",
        55.99,
        "https://arcaplanet.vtexassets.com/arquivos/ids/281554/purina-pro-plan-sensitive-skin-medium-adult-14kg-pack.jpg?v=1765372530",
        1,
        $dogCategory,
        "10/10/2024"
    );

    $products[] = new Food(
        "Crocchette PRO PLAN",
        59.99,
        "https://arcaplanet.vtexassets.com/arquivos/ids/271611/purina-pro-plan-veterinary-diets-urinary-gatto-con-pollo-5-kg.jpg?v=1765329200",
        20,
        $catCategory,
        "05/06/2027"
    );

    $products[] = new DogHouse(
        "Cuccia Alcazar",
        119.99,
        "https://arcaplanet.vtexassets.com/arquivos/ids/227611/p-a-y--cuccia-alcazar-90.jpg?v=1764983595",
        3,
        $dogCategory,
        "piccola"
    );

    $products[] = new DogHouse(
        "Casetta Lodge",
        159.99,
        "https://arcaplanet.vtexassets.com/arquivos/ids/264720/trixie-cuccia-da-esterno-lodge-per-cane-struttura.jpg?v=1763987794&quality=1&width=80&height=80",
        1,
        $dogCategory,
        "grande"
    );

    $products[] = new Toy(
        "Gioco con pallina",
        9.99,
        "https://arcaplanet.vtexassets.com/arquivos/ids/266265/yes-gioco-con-pallina-per-gatti.jpg?v=1765329427",
        35,
        $catCategory,
        "plastica"
    );

    $products[] = new Toy(
        "Peluche alligatore",
        14.99,
        "https://arcaplanet.vtexassets.com/arquivos/ids/223645/kong-cane-wiggi-alligator.jpg?v=1765380645",
        7,
        $dogCategory,
        "stoffa"
    );


?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 2</title>

        <!-- BOOTSTRAP --> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row">
                    <?php foreach ($products as $index => $product){?>
                        <div class="col-6">
                        <div class="card mb-4 mt-2">
                            <img src="<?php echo $product->image?>" class="card-img-top" alt="<?php echo $product->name?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->name?></h5>

                                <!-- Categoria del prodotto -->
                                <div class="mb-3 pt-1">
                                    <?php echo $product->category->icon; ?>
                                    <?php echo $product->category->name ?>
                                </div>

                                <!-- Stampa della classe del prodotto -->
                                <p class="card-text"><?php echo get_class($product)?></p>

                                <p class="card-text"><?php echo $product->price?> €</p>
                                <p class="card-text">Pezzi ancora disponibili: <?php echo $product->amount?></p>

                                <!-- Se il prodotto ha classe "Food" allora viene stampata in pagina la scadenza -->
                                <?php if (is_a($product, "Food")){ ?>
                                <p class="card-text">Scadenza: <?php echo $product->expiration?></p>
                                <?php } ?>

                                <!-- Se il prodotto ha classe "DogHouse" allora viene stampata in pagina la dimensione -->
                                <?php if (is_a($product, "DogHouse")){ ?>
                                <p class="card-text">Dimensioni: <?php echo $product->size?></p>
                                <?php } ?>

                                <!-- Se il prodotto ha classe "Toy" allora viene stampata in pagina il materiale -->
                                <?php if (is_a($product, "Toy")){ ?>
                                <p class="card-text">Materiale: <?php echo $product->material?></p>
                                <?php } ?>

                                <a href="#" class="btn btn-primary">Compra</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>    
    </body>
</html>