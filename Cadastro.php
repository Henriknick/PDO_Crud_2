<?php require './Includes/Header.php';?>

<div class="content">
    <?php include_once './Class/ClassCrud.php';
     $crud = new ClassCrud();
    ?>

    <div class="resultado"></div>

        <div class="container">
            <h1 class="center">Cadastro</h1>
            <form class="FormCadastro" name="FormCadastro" tabindex="1">
                <input type="text" class="form-contact-input" id="nome" name="nome" placeholder="Nome" />
                <input type="tel" class="form-contact-input" id="telefone"  name="telefone" placeholder="Telefone" />
                <input type="email" class="form-contact-input" id="email" name="email" placeholder="Email" />
                <button type="submit" class="form-contact-button">Cadastrar</button>
            </form>
        </div>
 
</div>




<?php require './Includes/Footer.php';?>
    