<?php


function insertStudents($data){
    extract($data);
    return query("insert into `matriculas_pessoa`
            (id_matricula, id_pessoa) values
            ('$nome','$tel','$cpf')");
}