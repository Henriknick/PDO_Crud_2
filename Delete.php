<?php
require 'Class/ClassCrud.php';
require './Includes/Header.php';
?>

<div class="content">
    <?php
    $idUser = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);//PEGA id com GET
    if(isset($idUser)){
        $crud = new ClassCrud();
        $crud->deletaDB("cliente","id=?",array($idUser));
        echo "Dado Deletado";

    }else{
        echo "Nenhum Dado selecionado para Exclusão";
    }

    ?>
</div>

<script>
    function exibirMensagem()
    {
        alert(“Olá, seja bem vindo(a)!”);
    }
</script>
<?php require './Includes/Footer.php';?>
    