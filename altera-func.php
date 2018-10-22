<?php
include("template/cabecalho.php");
include("conexao.php");
include("functions/funcionarios.php");

$setores = listaSetores($conn);

$id = $_POST['id'];
$funcionario = buscaFuncionario($conn, $id);
?>
<h1 class="p-1">Formulário de Alteração</h1>
<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="alteracao-func.php" class="form-control-sm text-left" method="post">
                <input type="hidden" name="id" value="<?= $funcionario['id']?>">
                <div class="form-group">
                    <label>Nome:</label>
                    <input class="form-control" type="text" name="nome" value="<?= $funcionario['nome']?>">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input class="form-control" type="email" name="email" value="<?= $funcionario['email']?>">
                </div>
                <div class="form-group">
                    <label>Identidade:</label>
                    <input class="form-control" type="text" name="identidade" value="<?= $funcionario['identidade']?>">
                </div>
                <div class="form-group">
                    <label>CPF:</label>
                    <input class="form-control" type="text" name="cpf" value="<?= $funcionario['cpf']?>">
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input class="form-control" type="text" name="endereco" value="<?= $funcionario['endereco']?>">
                </div>
                <div class="form-group">
                    <label>Data de Nascimento:</label>
                    <input class="form-control" type="date" name="dnacimento" value="<?= $funcionario['dnacimento']?>">
                </div>
                <div class="form-group">
                    <label>Setor:</label><br>
                    <select name="setor_id" class="form-control">
                        <?php foreach ($setores as $setor) :
                            $setorAtual = $funcionario['setor_id'] == $setor['id'];
                            $seletor = $setorAtual ? "selected='selected'" : "";
                        ?>
                            <option value="<?= $setor['id']?>" <?= $seletor?>>
                                <?= $setor['nome'] ?>
                            </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Salário:</label>
                    <input class="form-control" type="number" name="salario" value="<?= $funcionario['salario']?>">
                </div>
                <div class="form-group">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <button type="submit" class="btn btn-outline-success btn-block">Alterar</button>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-3">
                            <button type="button" class="btn btn-outline-success btn-block" href="altera-func.php">Limpar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include("template/rodape.php");?>

<!--header("Location: lista-func.php?alterado=true");
die();
?>-->