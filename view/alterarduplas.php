<?php
require_once '../dao/duplaDAO.php';

$dupla = $_GET['dupla'];
$duplaDAO = new duplaDAO();
$dupla = $duplaDAO->getalterar($dupla);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Cadastro</title>
</head>
<body class="bg">

    <header></header>

    <div class="container">
        <form action="../controller/alterardupla.php" method="post">
            <h1>Cadasto de Atletas</h1>
            <fieldset>
            <legend>Cadastre Aqui</legend>
            <input type="text" name="dupla" id="dupla" placeholder="Nome da Dupla" required value="<?php echo $dupla['dupla']?>"><br>
            <label>Atleta 1 <br>
            <input type="text" name="nome1" id="nome1" placeholder="Nome Completo" required value="<?php echo $dupla['nome1']?>"><br>
            <input type="number" name="cpf1" id="cpf1" placeholder="CPF" required value="<?php echo $dupla['cpf1']?>"><br>
            <input type="date" name="data1" id="data1" placeholder="Data de Nascimento" required value="<?php echo $dupla['data1']?>"><br>
            <label for="sexo1" value="<?php echo $atleta['sexo1']?>">Sexo <br>
                <select name="sexo1" id="sexo1">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </label><br>
            <label>Atleta 2 <br>
            <input type="text" name="nome2" id="nome2" placeholder="Nome Completo" required value="<?php echo $dupla['nome2']?>"><br>
            <input type="number" name="cpf2" id="cpf2" placeholder="CPF" required value="<?php echo $dupla['cpf2']?>"><br>
            <input type="date" name="data2" id="data2" placeholder="Data de Nascimento" required value="<?php echo $dupla['data2']?>"><br>
            <label for="sexo2" value="<?php echo $dupla['sexo2']?>">Sexo <br>
                <select name="sexo2" id="sexo2">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </label><br>
            <label>Arena de Treino <br>
            <input type="text" name="arenatreino" id="arena" placeholder="Ex: Riplay Arena Sports" value="<?php echo $dupla['arenatreino']?>">
            <label>Telefone p/ Contato <br>
            <input type="tel" name="contato" id="contato" placeholder="Telefone para Contato" required value="<?php echo $dupla['contato']?>"><br>
            </fieldset>
            </label>

            <button>CADASTRAR</button>
        </form>

        

    </div>
    
    <footer></footer>


</body>
</html>