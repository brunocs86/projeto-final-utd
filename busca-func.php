<?php
    include("template/cabecalho.php");
    include("conexao.php");
    include("functions/funcionarios.php");



//echo $buscar;
?>
<section class="container-fluid table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-light">
        <tr class="">
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">CPF</th>
            <th scope="col">Endereço</th>
            <th scope="col">D.N.</th>
            <th scope="col">Setor</th>
            <th scope="col">Salario</th>
            <th colspan="2" scope="colgroup">Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $buscar = $_POST['buscar'];
        $lista = buscaPesquisa($conn, $buscar);
        foreach ( $lista as $func ):
            ?>
            <tr class="text-sm">
                <td><?= $func['nome']; ?></td>
                <td><?= $func['email']; ?></td>
                <td><?= $func['cpf']; ?></td>
                <td><?= $func['endereco']; ?></td>
                <td><?= $func['dnacimento']; ?></td>
                <td><?= $nome =  buscaSetor($conn, $func['setor_id']); ?></td>
                <td><?= $func['salario']; ?></td>
                <td>
                    <form action="remove-func.php" method="post">
                        <input type="hidden" name="id" value="<?= $func['id']?>">
                        <button class="btn btn-outline-danger" >
                            <i class="fas fa-times"></i>
                        </button>
                    </form>
                </td>
                <td>
                    <form action="altera-func.php" method="post">
                        <input type="hidden" name="id" value="<?= $func['id']?>">
                        <button class="btn btn-outline-primary" >
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>

        <?php
        endforeach;
        ?>
        </tbody>
    </table>
</section>
<?php include("template/rodape.php");?>