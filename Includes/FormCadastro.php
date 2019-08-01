<?php include_once 'Class/ClassCrud.php';
$crud = new ClassCrud();

/* Edição de dados */
if(isset($_GET['id'])){
        $acao="Editar";
        $Bfetch = $crud->selectDB("*","cliente","Where id=?",array($_GET['id']));
        $fetch = $Bfetch->fetch(PDO::FETCH_ASSOC);
        $id = $fetch['id'];
        $nome = $fetch['nome'];
        $telefone = $fetch['telefone'];
        $email = $fetch['email'];

}

/* Cadastro novo */
else{
    $acao = "Cadastrar";
    $id = "0";
    $nome = "";
    $telefone = "";
    $email = "";
}

?>

<div class="resultado"></div>

<div class="container">
    <h1 class="center">Cadastro</h1>
    <form class="FormCadastro" name="FormCadastro" method="post" tabindex="1">
        <input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>">
        <input type="hidden" id="id" name="id" value="<?php echo $id ?>">

        <input type="text" class="form-contact-input" id="nome" name="nome" placeholder="Nome" value="<?php echo $nome ?>" />
        <input type="tel" class="form-contact-input" id="telefone"  name="telefone" placeholder="Telefone - (xx) x xxxx-xxxx" value="<?php echo $telefone ?>" />
        <input type="email" class="form-contact-input" id="email" name="email" placeholder="Email" value="<?php echo $email ?>" />

        <input type="submit" class="form-contact-button" value="<?php echo $acao; ?>">
    </form>
</div>