<?php

include_once __DIR__ . "/../config/main.php";

function getConnection () { //возвращает или объект или NULL

    static $connection = null; //статически остается между вызовами
    if (is_null ($connection)) {
        $config = include CONFIG_DIR . "db.php";
        $connection = mysqli_connect( 
            $config['host'],
            $config['login'],
            $config['password'],
            $config['dbName']
        );
    }
    return $connection;
}

function queryAll(string $sql) {  // функция, которая выполняет запросы для выборки нескольких строк

    $res = mysqli_query(getConnection(), $sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function queryOne(string $sql) {  // функция, которая выполняет запросы для выборки одной строки

    return queryAll($sql)[0]; ////0 - доступ к первому элементу массива
}


function execute(string $sql) {
    
    return mysqli_query(getConnection(), $sql);
}  

function getLastInsertId() {
    return mysqli_insert_id(getConnection());
}