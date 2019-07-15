<?php
if(isset($_POST['id'])){
    $Id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){ 
    $Id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ 
    $Id="0"; 
}

if(isset($_POST['nome'])){
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['nome'])){ 
    $nome=filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ 
    $nome=""; 
}

if(isset($_POST['telefone'])){
    $telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['telefone'])){ 
    $telefone =filter_input(INPUT_GET,'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ 
    $telefone =""; 
}

if(isset($_POST['email'])){
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['email'])){ 
    $email=filter_input(INPUT_GET,'email',FILTER_SANITIZE_SPECIAL_CHARS);
}else{ 
    $email=""; 
}
?>
