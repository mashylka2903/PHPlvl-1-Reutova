<?php

include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . "render.php";
include ENGINE_DIR . "menu.php";
include ENGINE_DIR . "products.php";


$products = getProducts();


$menu = getMenu();
//displayMenu($menu); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <ul class="nav">
                <?php foreach ($menu as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= $item['link'] ?>">
                            <?= $item['title'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
    </ul>
</header> 

<main>

<div class = "product-list">
    <?php 
    foreach ($products as $product) :
    ?>
        <div class = "product-item">
            <h5><?=$product['title']?></h5>
            <p><?=$product['description']?></p>
            <h2><?=$product['price']?></h2>
        </div>
    <?php 
    endforeach;
    ?>

</div>


</main>
</body>
</html>
