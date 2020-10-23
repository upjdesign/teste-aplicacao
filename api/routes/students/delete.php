<?php


function deleteStudents($id){
    return query("delete from `pessoa` where `id`='$id'");
}
function deleteMatricula($id){
    return query("delete from `matriculas_pessoa` where `id_matricula`='$id'");
}