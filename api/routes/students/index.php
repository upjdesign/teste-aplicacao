<?php

require_once "list.php";
require_once "data.php";
require_once "delete.php";
require_once "insert.php";
require_once "update.php";


header('Content-Type:application/json');



if($method === 'GET'){
    if(isset($_GET['curso'])){
        echo json_encode(dataCurso());
        exit;
    }else if(isset($_GET['consultmatricula'])){ 
        if(isset($_GET['id'])){
            echo json_encode(dataMatricula($_GET['id']));
            exit;
        }else{
            echo json_encode(dataMatricula());
            exit;
        }
    }else{
        if(isset($_GET['id'])){
            echo json_encode(dataStudents($_GET['id']));
            exit;
        }else{
            echo json_encode(listStudents());
            exit;
        }
    }
}

if($method === 'DELETE'){
    if($_GET['id']){
        if(isset($_GET['deletemat'])){
            deleteMatricula($_GET['id']);
        }else{
            deleteStudents($_GET['id']);
        }
    }
    exit;
}

if($method === 'POST'){
    if(isset($_REQUEST['matricula'])){
        insertMatricula($_REQUEST);
        exit;
    }else{
        insertStudents($_REQUEST);
        exit;
    }
}

/* if($method === 'GET'){
    if(isset($_GET['update'])){
        updateStudents($_REQUEST, $_REQUEST['id']);
        exit;
    }
} */

if($method === 'PUT'){
    updateStudents($_REQUEST, $_REQUEST['id']);
    exit;
}



echo '{"error":"not found"}';
