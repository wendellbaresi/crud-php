<?php

 class conexao{

    function getConexao(){
        $banco = new mysqli("localhost","root","","projetof");
        return $banco;
        if($banco->connect_errno){
        echo "Erro " + $banco->error;
        }
    }
 }    