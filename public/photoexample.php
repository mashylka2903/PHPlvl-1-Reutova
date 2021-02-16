<?php

include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . "db.php";


$host ='127.0.0.1';
$login = 'root';
$password = 'root';
$dbName = 'menu_db';

$connection = mysqli_connect($host, $login, $password, $dbName);

$id = mysqli_escape_string($connection, strip_tags($_GET['id'])); //экранирование, чтобы безопасно вводить id в форму ниже

$sql = "SELECT * FROM products WHERE id = {$id}";                   // отображение картинки по id

?>

<form action="">
    <input type="text" name="id">
    <input type="submit">
</form>