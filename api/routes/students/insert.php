<?php


function insertStudents($data){
    extract($data);
    return query("insert into `pessoa`
            (nome, telefone, cpf) values
            ('$nome','$tel','$cpf')");
}


function insertMatricula($data){
    extract($data);

    /* for($i=0;$i<count($data);$i++){
        query("insert into `matriculas_pessoa`
            (id_matricula, id_pessoa) values
            ('$disciplina','$idaluno')");
    } */
    return query("insert into `matriculas_pessoa`
            (id_matricula, id_pessoa) values
            ('$disciplina','$idaluno')");
}