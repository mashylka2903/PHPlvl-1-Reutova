<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "db.php";

$id = (int) $_GET['id'];

if ($image = query ("SELECT * FROM photos WHERE id = {$id}")[0]) { //0 - доступ к первому элементу массива
    execute ("UPDATE photos SET views = views + 1 WHERE id = {$id}"); //обязательно where чтобы добавлялись элемегту, а не всей базе

}
include VIEWS_DIR . "gallery/photo.php";