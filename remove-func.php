<?php
    //Cabeçalho da página
    include("template/cabecalho.php");
    //conexão com o banco
    include("conexao.php");
    //funções de relacionamento com o banco mysql
    include("functions/funcionarios.php");

    //Recebe id do usuário a ser removido
    $id = $_POST['id'];

    //Convoca função que deleta usuário do banco, conforme id
    removeFuncionario($conn, $id);

    //retorna para lista dos funcionários
    header("Location: lista-func.php?removido=true");
    die();
?>