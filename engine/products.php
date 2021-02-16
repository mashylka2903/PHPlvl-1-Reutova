<?php

require_once ENGINE_DIR . "db.php";

function getProducts() {
    

    $sql = 'SELECT * FROM products';

    return query($sql);
    
}