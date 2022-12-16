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
        <form action="../controller/cadastrodupla.php" method="post">
            <h1>Cadasto de Atletas</h1>
            <fieldset>
            <legend>Cadastre Aqui</legend>
            <input type="text" name="dupla" id="dupla" placeholder="Nome da Dupla" required><br>
            <label>Atleta 1 <br>
            <input type="text" name="nome1" id="nome1" placeholder="Nome Completo" required><br>
            <input type="number" name="cpf1" id="cpf1" placeholder="CPF" required><br>
            <input type="date" name="data1" id="data1" placeholder="Data de Nascimento" required><br>
            <label for="sexo1">Sexo <br>
                <select name="sexo1" id="sexo1">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </label><br>
            <label>Atleta 2 <br>
            <input type="text" name="nome2" id="nome2" placeholder="Nome Completo" required><br>
            <input type="number" name="cpf2" id="cpf2" placeholder="CPF" required><br>
            <input type="date" name="data2" id="data2" placeholder="Data de Nascimento" required><br>
            <label for="sexo2">Sexo <br>
                <select name="sexo2" id="sexo2">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </label><br>
            <label>Arena de Treino <br>
            <input type="text" name="arenatreino" id="arena" placeholder="Ex: Riplay Arena Sports">
            <label>Telefone p/ Contato <br>
            <input type="tel" name="contato" id="contato" placeholder="Telefone para Contato" required><br>
            </fieldset>
            </label>

            <button>CADASTRAR</button>
        </form>

        

    </div>
    
    <footer></footer>


</body>
</html>