<?php
    //Cabeçalho da página
    include("template/cabecalho.php");
    //conexão com o banco
    include("conexao.php");
    //funções de relacionamento com o banco mysql
    include("functions/funcionarios.php");
?>
<?php
//Recebe os valores repassados pelo formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$identidade = $_POST["identidade"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$dnacimento = $_POST["dnacimento"];
$setor_id = $_POST["setor_id"];
$salario = $_POST["salario"];

//Convoca função de inserção dos dados no banco mysql
if (insereFuncionario( $conn, $nome, $email, $identidade, $cpf, $endereco, $dnacimento, $setor_id, $salario )){ ?>

    <!-- Apresenta mensagem de sucesso-->
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

    <!-- Apresenta mensagem de erro-->
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
    //Rodapé da página
    include("template/rodape.php");
?>