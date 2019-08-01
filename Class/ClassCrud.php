<?php
include_once 'ClassConecta.php';

class ClassCrud extends ClassConecta { //ESSA CLASSE HERDA TUDO QUE TEM NA ClasseConecta
    
    private $crud;
    private $contador;
    
    //PREPARANDO DECLARATIVAS
    private function prepareStatments($query, $parametros)
    {
        $this->countParametros($parametros);
        
        $this->crud= $this->conectaBanco()->prepare($query);
        if($this->contador >0){
            for($i=1; $i <= $this->contador; $i++){
                $this->crud->bindValue($i, $parametros[$i-1]);
            }
        }
        $this->crud->execute();
    }
    
    //CONTADOR DE PARAMETROS
    private function countParametros($parametros) {
        $this->contador = count($parametros);
    }
    
    #Inserção no Banco de Dados
    public function insertDB($Tabela , $Condicao , $Parametros){
        $this->prepareStatments("insert into {$Tabela} values ({$Condicao})" , $Parametros);
        return $this->crud;
    }

    #Seleção no Banco de Dados
    public function selectDB($Campos,$Tabela,$Condicao,$Parametros){
        $this->prepareStatments("SELECT {$Campos} FROM {$Tabela} {$Condicao} ",$Parametros);
        return $this->crud;
    }

    #Deleta no Banco de Dados
    public function deletaDB($Tabela, $Condicao, $Parametros){
        $this->prepareStatments("DELETE FROM {$Tabela} WHERE {$Condicao} ",$Parametros);
        return $this->crud;
    }

    #Atualizar no Banco de Dados

    public function atualizaBD($Tabela,$Set,$Condicao,$Parametros){
       $this->prepareStatments("UPDATE {$Tabela} SET {$Set} WHERE {$Condicao}", $Parametros);
        return $this->crud;
    }
}
