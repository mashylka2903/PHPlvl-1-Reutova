<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "db.php";

/*function getFiles() {
    $sql = 'SELECT * FROM photos';
    return query($sql);    
}

$images = getFiles(IMG_DIR); мы можем вместо этого использовать функцию query из db.php */

$images = query("SELECT * FROM photos ORDER BY views desc");

include VIEWS_DIR . "gallery/gallery.php";

