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
        <form action="../controller/cadastrocampeonato.php" method="post">
            <h1>Cadasto de Atletas</h1>
            <fieldset>
            <legend>Cadastre Aqui</legend>
            <input type="text" name="dp" id="dupla" placeholder="Nome da Dupla" required><br>
            <label>Atleta 1 <br>
            <input type="text" name="n1" id="nome1" placeholder="Nome Completo" required><br>
            <label for="s1">Sexo <br>
                <select name="s1" id="s1">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </label><br>
            <label>Atleta 2 <br>
            <input type="text" name="n2" id="nome2" placeholder="Nome Completo" required><br>
            <label for="s2">Sexo <br>
                <select name="s2" id="s2">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </label><br>
            <label for="categoria">Categoria</label>
            <select name="categoria" id="">
                <option value="iniciante">Iniciante</option>
                <option value="misto">Misto</option>
            </select><br><br>
            <label>Arena de Treino <br>
            <input type="text" name="arena" id="arena" placeholder="Ex: Riplay Arena Sports">
            <label>Telefone p/ Contato <br>
            <input type="tel" name="tel" id="tel" placeholder="Telefone para Contato" required><br>
            </fieldset>
            </label>

            <button>CADASTRAR</button>
        </form>

        

    </div>
    
    <footer></footer>


</body>
</html>