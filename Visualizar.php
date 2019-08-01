<?php
require 'Class/ClassCrud.php';
require './Includes/Header.php';
?>

<div class="content">
    <?php
        $crud = new ClassCrud();
        $idUser = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);//PEGA id com GET
        $res = $crud->selectDB("*","cliente","Where id=?",array($idUser));

        $resultado = $res->fetch(PDO::FETCH_ASSOC);
    ?>

    <div class="container">
        <h1>Dados do Cliente</h1><hr>
        <br>
        <strong>Nome:</strong>
        <?php echo $resultado['nome']; ?><br>
        <strong>Telefone:</strong>
        <?php echo $resultado['telefone'];?><br>
        <strong>Email:</strong>
        <?php echo $resultado['email'];?><br>
    </div>




</div>

<?php require './Includes/Footer.php';?>
    