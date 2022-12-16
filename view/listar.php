<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listar.css">
    <title>Listar</title>
</head>
<body class="bg">

    <?php

        require_once '../dao/duplaDAO.php';

        $duplaDAO = new duplaDAO();
        $duplas = $duplaDAO->getduplas();

    ?>

    <h1>Lista de Atletas</h1>

    <table border="1">
    <tr>
        <td>Dupla</td>
        <td>Nome 1</td>
        <td>CPF 1</td>
        <td>Data de Nascimento 1</td>
        <td>Sexo 1</td>
        <td>Nome 2</td>
        <td>CPF 2</td>
        <td>Data 2</td>
        <td>Sexo 2</td>
        <td>Arena de Treino</td>
        <td>Contato</td>
        <td>Alterar</td>
        <td>Excluir</td>
    </tr>

    <?php
        foreach ($duplas as $dupla) {
        echo   "<tr>";
        echo   "<td>{$dupla['dupla']}</td>";
        echo   "<td>{$dupla['nome1']}</td>";
        echo   "<td>{$dupla['cpf1']}</td>";
        echo   "<td>{$dupla['data1']}</td>" ; 
        echo   "<td>{$dupla['sexo1']}</td>"; 
        echo   "<td>{$dupla['nome2']}</td>";
        echo   "<td>{$dupla['cpf2']}</td>";
        echo   "<td>{$dupla['data2']}</td>";
        echo   "<td>{$dupla['sexo2']}</td>";
        echo   "<td>{$dupla['arenatreino']}</td>";
        echo   "<td>{$dupla['contato']}</td>";
        echo   "<td><a href='alterarduplas.php?dupla={$dupla['dupla']}'>Alterar</a></td>";
        echo   "<td><a href='../controller/excluirdupla.php?dupla={$dupla['dupla']}'>Excluir</a></td>";
        echo   "</tr>";
        }
    ?>

    </table>
   
    
</body>
</html>
