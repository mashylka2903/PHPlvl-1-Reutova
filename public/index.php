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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset = "UTF-8">
	<link rel="stylesheet" href="./public_html/css/styles.css">

    <title>PHP Shop</title>

</head>
<body>
<header>
    <ul class="nav">
                <?php foreach ($menu as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $item['link'] ?>">
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

            <h1><?=$product['title']?></h1>
            <p><?=$product['description']?></p>
            <h2>Price: <?=$product['price']?></h2>
            <a href="/card.php?id=<?=$product['id'];?>" class="btn btn-primary">Посмотреть</a>
        </div>
        
    <?php 
    endforeach;
    ?>

</div>


</main>
</body>
</html>
