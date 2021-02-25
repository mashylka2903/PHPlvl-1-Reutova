<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "db.php";
include_once ENGINE_DIR . "gallery.php";
include_once ENGINE_DIR . "filesystem.php";

//var_dump($_FILES); exit;
/*function getFiles() {
    $sql = 'SELECT * FROM photos';
    return query($sql);    
}

$images = getFiles(IMG_DIR); мы можем вместо этого использовать функцию query из db.php */

//$images = queryAll("SELECT * FROM photos ORDER BY views desc");

if($_SERVER['REQUEST_METHOD'] == "POST") { //если метод передачи POST через массив SERVER
    uploadFile('gallery_image', IMG_DIR);
    $name = $_FILES['gallery_image']['name']; //для БД
    createImage($name, $name);
    header("Location: /gallery.php"); //редирект на страницу, чтобы не было повторной отправки данных
    
}

$images = getGalleryImages();

include VIEWS_DIR . "gallery/gallery.php"; 

