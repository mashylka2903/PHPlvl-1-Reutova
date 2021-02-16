<?php

//include ENGINE_DIR . 'filesystem.php';

function getMenu(): array {

    $host ='127.0.0.1';
    $login = 'root';
    $password = 'root';
    $dbName = 'menu_db';
    

    $connection = mysqli_connect($host, $login, $password, $dbName);
    
    $sql = 'SELECT * FROM menu';
    $res = mysqli_query($connection, $sql);

    $menu = [];

    /*while ($row = mysqli_fetch_assoc($res)) {
        $menu[] = $row;
    } можно заменить функцией*/

    $menu = mysqli_fetch_all($res, MYSQLI_ASSOC); /*в виде ассоциативного массива*/

    
    /*$data = readCsv(DB_DIR . 'menu.csv');

    foreach ($data as $row) {
        $menu[] = [
        'title' => $row[0],
        'link' => $row[1]
        ];
    }*/

    return $menu;
}
