<?php


function listStudents(){
    return query("select `id`, nome from `pessoa`")->fetchAll(PDO::FETCH_ASSOC);
}