<?php

abstract class ClassConecta { //CLASSE ABSTRADA NÃO PODE SER INSTANCIADA
    
    //REALIZA CONEXAO COM O BD
    public function conectaBanco(){
        try {
            $conn = new PDO("mysql:host=localhost;dbname=crud", "root", "");
            return $conn;            
        } catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    } 
}
