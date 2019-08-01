<script type="text/javascript" src="../zepto.min.js"></script>
<?php
include_once("../Includes/Variaveis.php");
include_once("../Class/ClassCrud.php");

$Crud = new ClassCrud();

if ($acao == "Cadastrar") {
    $Crud->insertDB(
        "cliente",
        "?,?,?,?",
        array(
            $id,
            $nome,
            $telefone,
            $email
        )
    );
    echo "Cadastro realizado com sucesso!";
} else {

    $Crud->atualizaBD(
        "cliente",
        "nome=?,telefone=?,email=?",
        "id=?",
        array(
            $nome,
            $telefone,
            $email,
            $id
        )
    );
    echo "Cadastro Editado com Sucesso!";

}




