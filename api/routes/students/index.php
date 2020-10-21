<?php

require_once "list.php";
require_once "data.php";
require_once "delete.php";
require_once "insert.php";
require_once "update.php";


header('Content-Type:application/json');



if($method === 'GET'){
    if(isset($_GET['id'])){
        echo json_encode(dataStudents($_GET['id']));
        exit;
    }else{
        echo json_encode(listStudents());
        exit;
    }
}

if($method === 'DELETE'){
    deleteStudents($_GET['id']);
    exit;
}

if($method === 'POST'){
    insertStudents($_REQUEST);
    exit;
}

if($method === 'PUT'){
    updateStudents($_REQUEST, $_REQUEST['id']);
    exit;
}



echo '{"error":"not found"}';
