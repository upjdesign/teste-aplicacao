<?php


function deleteStudents($id){
    return query("delete from `pessoa` where `id`='$id'");
}