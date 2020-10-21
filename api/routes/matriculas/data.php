<?php


function dataStudents($id){
    return query("select * from `pessoa` where `id`='$id'")->fetch(PDO::FETCH_ASSOC);
}