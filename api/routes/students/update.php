<?php


function updateStudents($data, $id){
    extract($data);

    return query("update `pessoa`
            set
                nome='$nome',
                telefone='$tel',
                cpf='$cpf'
            where `id`='$id'");
}