<?php
    //Cabeçalho da página
    include("template/cabecalho.php");
    //conexão com o banco
    include("conexao.php");
    //funções de relacionamento com o banco mysql
    include("functions/funcionarios.php");
?>
<!-- Fomulario de Cadastro de Funcionário-->
<h1 class="p-1">Formulário de Cadastro</h1>
<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="adiciona-func.php" id="myForm" class="form-control-sm text-left" method="post">
                <div class="form-group">
                    <label>Nome:</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="form-group">
                    <label>Identidade:</label>
                    <input class="form-control" type="text" name="identidade">
                </div>
                <div class="form-group">
                    <label>CPF:</label>
                    <input class="form-control" type="text" name="cpf">
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input class="form-control" type="text" name="endereco">
                </div>
                <div class="form-group">
                    <label>Data de Nascimento:</label>
                    <input class="form-control" type="date" name="dnacimento">
                </div>
                <div class="form-group">
                    <label>Setor:</label><br>
                    <select name="setor_id" class="form-control">
                        <?php foreach ($setores as $setor) : ?>
                            <option value="<?= $setor['id']?>">
                                <?= $setor['nome'] ?>
                            </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Salário:</label>
                    <input class="form-control" type="number" name="salario">
                </div>
                <div class="form-group">
                    <div class="row justify-content-center">

                        <div class="col-3">
                            <button type="reset" name="limpar" class="btn btn-outline-primary btn-block" /*href="func-formulario.php"*/>Limpar</button>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-outline-success btn-block">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Fim do Fomulario de Cadastro de Funcionário-->
<?php
    //Rodapé da página
    include("template/rodape.php");
?>