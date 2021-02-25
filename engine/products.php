<?php

require_once ENGINE_DIR . "db.php";

function getProducts(): array {
    

    $sql = 'SELECT * FROM products';

    return queryAll($sql);
    
}

function getProductsById(int $id): array
{
    return queryOne("SELECT * FROM products WHERE id = {$id}");
}

