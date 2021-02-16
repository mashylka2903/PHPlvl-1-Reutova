<?php

function query(string $sql) {

    $host ='127.0.0.1';
    $login = 'root';
    $password = 'root';
    $dbName = 'menu_db';

    $connection = mysqli_connect($host, $login, $password, $dbName);
    $res = mysqli_query($connection, $sql);

    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}