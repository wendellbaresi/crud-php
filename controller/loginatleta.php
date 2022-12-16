<?php

session_start();
require_once '../dao/conexao/loginDAO.php';

    $atleta = isset($_POST['atleta'])? $_POST['atleta']: '' ;
    $senha = $_POST['senha'];

    $loginDAO = new loginDAO();
    $login = $loginDAO->login($atleta,$senha);

    if(!empty($login)){
        $_SESSION['atleta'] = $login['atleta'];
        $_SESSION['perfil'] = $login['nome'];
        header("Location: ../view/index.php");
    }
    echo "<script> alert('Login Realizado com Sucesso!!') </script>";

?>