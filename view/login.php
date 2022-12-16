<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login2.css">
    <title>Login</title>
</head>
<body class="bg">

    <header>
        <nav>
            <ul class="menu">
                <li><a href="./index.php">HOME</a></li>
                <li><a href="./sobre.html">SOBRE</a></li>
            </ul>
        </nav>
    </header>

    

    
    <div class="container">
        <form action="../controller/loginatleta.php" method="post">
        <h1>Bem Vindo ao Mundo do futevolei</h1>
            <fieldset>
            <legend>Login de Atleta</legend>
            <input type="text" name="atleta" id="atleta" placeholder="Atleta" required><br>
            <label>Atleta 1 <br>
            <input type="password" name="senha" id="senha" placeholder="Senha" required><br>
        
            <button>Login</button>
        </form>
    </div>

    
    
</body>
</html>