<?php

function listaFunc($conn){
    $lista = array();
    $resultado = mysqli_query($conn, "select f.*,s.nome as setor_nome from funcionario as f join setores as s on s.id=f.setor_id");

    while ($funcionarios = mysqli_fetch_assoc($resultado)){
        array_push($lista, $funcionarios);
    }

    return $lista;
}

function buscaPesquisa($conn, $buscar){
    $lista = array();
    $query = "select * from funcionario where nome like '%$buscar%' or email like '%$buscar%' or cpf like '%$buscar%'";
    $resultado = mysqli_query($conn, $query);

    while($funcionarios = mysqli_fetch_assoc($resultado)):
        array_push($lista, $funcionarios);
    endwhile;

    return $lista;
}

function insereFuncionario( $conn, $nome, $email, $identidade, $cpf, $endereco, $dnacimento, $setor_id, $salario ){
    $query = "insert into funcionario (nome, email, identidade, cpf, endereco, dnacimento, setor_id, salario) 
        values ('{$nome}', '{$email}', '{$identidade}', '{$cpf}', '{$endereco}', '{$dnacimento}', '{$setor_id}', {$salario})";

    return mysqli_query($conn, $query);
}

function removeFuncionario($conn, $id){
    $query = "delete from funcionario where id = {$id}";
    return mysqli_query($conn, $query);
}

function buscaFuncionario($conn, $id){
    $query = "select * from funcionario where id = {$id}";
    $resultado = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraFuncionario( $conn,  $id, $nome, $email, $identidade, $cpf, $endereco, $dnacimento, $setor_id, $salario ){
    $query = "update funcionario set nome = '{$nome}', email = '{$email}', identidade = '{$identidade}', cpf = '{$cpf}', endereco = '{$endereco}', dnacimento = '{$dnacimento}', setor_id = '{$setor_id}', salario = {$salario} where  id = {$id}";

    return mysqli_query($conn, $query);
}

function listaSetores($conn){
    $setores = array();
    $query = "select * from setores;";
    $resultado = mysqli_query($conn, $query);
    while ($setor = mysqli_fetch_assoc($resultado)):
        array_push($setores, $setor);
    endwhile;

    return $setores;
}

function buscaSetor($conn, $id){
    $query = "select nome from setores where id = {$id}";
    $resultado = mysqli_query($conn, $query);
    $setor = mysqli_fetch_assoc($resultado);
    return  $setor['nome'];
}