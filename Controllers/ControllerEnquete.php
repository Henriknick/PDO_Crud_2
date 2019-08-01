<?php
include '../Includes/Variaveis.php';
include '../Class/ClassCrud.php';


$crud = new ClassCrud();


$res = $crud->insertDB(
    "enquete",
    "?,?",
    array(
        $id,
        $radio
    )
);


if($res->rowCount()==0){//se nenyma linha afetada...
    echo "Algum erro no processo...";

}else //se dado inserido do banco...
    echo "Voto Computado";