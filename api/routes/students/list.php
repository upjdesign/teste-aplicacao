<?php


function listStudents(){
    return query("select `id`, `nome`, `telefone`, `cpf`, nome from `pessoa`")->fetchAll(PDO::FETCH_ASSOC);
}

function dataCurso(){
    return query("select * from `curso`")->fetchAll(PDO::FETCH_ASSOC);
}

function dataMatricula(){
        return query("select * from `matriculas_pessoa`, `curso`, `pessoa` where matriculas_pessoa.id_matricula = curso.id_matricula and matriculas_pessoa.id_pessoa = pessoa.id")->fetchAll(PDO::FETCH_ASSOC);
}