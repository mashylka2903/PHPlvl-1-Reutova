<?php


    $host ='127.0.0.1';
    $login = 'root';
    $password = 'root';
    $dbName = 'menu_db';

    $connection = mysqli_connect($host, $login, $password, $dbName);
    
    $sql = 'SELECT * FROM products';
   
    $res = mysqli_query($connection, $sql);

    