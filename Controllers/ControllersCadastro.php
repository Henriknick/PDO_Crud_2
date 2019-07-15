<script type="text/javascript" src="../zepto.min.js"></script>
<?php
include_once("../Includes/Variaveis.php");
include_once("../Class/ClassCrud.php");

$Crud = new ClassCrud();


    $Crud->insertDB(
        "cliente",
        "?,?,?,?",
        array(
            $Id,
            $nome,
            $telefone,
            $email
        )
    );

    echo "Cadastro realizado com sucesso!";



