<?php


function listStudents(){
    return query("select `id`, `nome`, `telefone`, `cpf`, nome from `pessoa`")->fetchAll(PDO::FETCH_ASSOC);
}