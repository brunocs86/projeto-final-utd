<?php
    include("template/cabecalho.php");
    include("conexao.php");
    include("functions/funcionarios.php");


?>
<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$identidade = $_POST["identidade"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$dnacimento = $_POST["dnacimento"];
$setor_id = $_POST["setor_id"];
$salario = $_POST["salario"];

if (insereFuncionario( $conn, $nome, $email, $identidade, $cpf, $endereco, $dnacimento, $setor_id, $salario )){ ?>

    <p class="alert-success">
        Nome: <?= $nome; ?>
        <br>Email: <?= $email; ?>
        <br>Identidade: <?= $identidade; ?>
        <br>CPF: <?= $cpf; ?>
        <br>Endereco: <?= $endereco; ?>
        <br>Data de Nascimento: <?= $dnacimento; ?>
        <br>Setor: <?= $setor_id; ?>
        <br>Salário: <?= $salario; ?>
        <br> Funcionário adicionado com suscesso!
    </p>

<?php }else{
    $msg = mysqli_error($conn);
    ?>

    <p class="alert-danger">
        Nome: <?= $nome; ?>
        <br>Email: <?= $email; ?>
        <br>Identidade: <?= $identidade; ?>
        <br>CPF: <?= $cpf; ?>
        <br>Endereco: <?= $endereco; ?>
        <br>Data de Nascimento: <?= $dnacimento; ?>
        <br>Setor: <?= $setor_id; ?>
        <br>Salário: <?= $salario; ?>
        <br> Funcionário não adicionado: <?= $msg ?>
    </p>

<?php
}

    include("template/rodape.php");
?>