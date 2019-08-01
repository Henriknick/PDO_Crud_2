<?php
require 'Class/ClassCrud.php';
require './Includes/Header.php'; ?>

<div class="content">
    <!--    <table class="tabelaCrud">-->
    <!--        <tr>Nome</tr>-->
    <!--        <tr>Telefone</tr>-->
    <!--        <tr>Email</tr>-->
    <!--        <tr>Ações</tr>-->
    <!--    </table>-->
        <h1 class="center">Lista de Clientes</h1>
    <table class="table table-responsive">

        <thead><!--cabeçalho--->
        <tr><!--linha--->
            <th>NOME</th><!--coluna do cabeçalho --->
            <th>TELEFONE</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
        </tr>
        </thead>

        <tbody><!--Corpo da tabela-->

        <?php
            $crud = new ClassCrud();


            $res = $crud->selectDB("*","cliente","",array());

            while($resultado = $res->fetch(PDO::FETCH_ASSOC)){
        ?>
                <tr>
                    <td><?php echo $resultado['nome']; ?></td><!--coluna-->
                    <td><?php echo $resultado['telefone']; ?></td><!--coluna-->
                    <td><?php echo $resultado['email']; ?></td><!--coluna-->
                    <td>
                        <a href="<?php echo "Visualizar.php?id=".$resultado['id']; ?>"><img src="Images/view.png" alt="Visualizar"></a>
                        <a href="<?php echo "Cadastro.php?id=".$resultado['id']; ?>"><img src="Images/edit.png" alt="Editar"></a>
                        <a class="deletar" href="<?php echo "Delete.php?id=".$resultado['id']; ?>"><img src="Images/del.png" alt="Excluir"></a>
                    </td><!--coluna-->
                </tr>
        <?php
            }
        ?>

        </tbody>
    </table>
</div>


<?php require './Includes/Footer.php'; ?>
    