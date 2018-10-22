<?php
    include("template/cabecalho.php");
    include("conexao.php");
    include("functions/funcionarios.php");

    $id = $_POST['id'];

    removeFuncionario($conn, $id);

    header("Location: lista-func.php?removido=true");
    die();
?>