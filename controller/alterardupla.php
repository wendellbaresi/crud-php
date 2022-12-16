<?php

require_once '../dao/duplaDAO.php';
require_once '../dto/duplaDTO.php';

    $dupla = $_POST['dupla'];
    $nome1 = $_POST['nome1'];
    $cpf1 = $_POST['cpf1'];
    $data1 = date($_POST['data1']);
    $sexo1 = $_POST['sexo1'];
    $nome2 = $_POST['nome2'];
    $cpf2 = $_POST['cpf2'];
    $data2 = date($_POST['data2']);
    $sexo2 = $_POST['sexo2'];
    $arenatreino = $_POST['arenatreino'];
    $contato = $_POST['contato'];


    $duplaDTO = new duplaDTO();

    $duplaDTO->setDupla($dupla);
    $duplaDTO->setNome1($nome1);
    $duplaDTO->setCpf1($cpf1);
    $duplaDTO->setData1($data1);
    $duplaDTO->setSexo1($sexo1);
    $duplaDTO->setNome2($nome2);
    $duplaDTO->setCpf2($cpf2);
    $duplaDTO->setData2($data2);
    $duplaDTO->setSexo2($sexo2);
    $duplaDTO->setArenatreino($arenatreino);
    $duplaDTO->setContato($contato);

    $duplaDAO = new duplaDAO();
    $ok = $duplaDAO->alterardupla($duplaDTO);
    if($ok){
        echo "<script> alert('Cadastro Realizado com Sucesso!!') </script>";
    }

?>