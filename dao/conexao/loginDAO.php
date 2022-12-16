<?php
require_once 'conexao.php';

    class loginDAO{


        function login($atleta,$senha){
            $bd = new Conexao();
            $conexao = $bd->getConexao();

            $sql = $conexao->query("SELECT * FROM atleta a JOIN perfil p
            ON a.perfil_idperfil = a.idatleta WHERE a.user = '$atleta' AND a.senha = '$senha';");

            $assoc = $sql->fetch_assoc();
            return $assoc;
            if(!$assoc){
                echo $conexao->error;
            }
        }
    }
?>