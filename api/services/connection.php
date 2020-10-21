<?php

function query($sql){
    $connection = new PDO('mysql:host=localhost;dbname=banco_teste', 'root', '');
    $result = $connection->query($sql);
    $connection = null;
    return $result;
}