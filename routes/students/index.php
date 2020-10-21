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
    }
}

if($method === 'DELETE'){
    deleteStudents($_GET['id']);
}

if($method === 'POST'){
    insertStudents($_REQUEST);
}

if($method === 'PUT'){
    updateStudents($_REQUEST, $_REQUEST['id']);
}



echo '{"error":"not found", "info":"'.$_SERVER['REQUEST_METHOD'].'"}';
