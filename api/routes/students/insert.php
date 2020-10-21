<?php


function insertStudents($data){
    extract($data);
    return query("insert into `pessoa`
            (nome, telefone, cpf) values
            ('$nome','$tel','$cpf')");
}