<?php

require_once ENGINE_DIR . "db.php";

function getMenu(): array {

    $sql = 'SELECT * FROM menu';

    return query($sql);
    
}