<?php

$perfil = $_SESSION['perfil'];

switch ($perfil) {
    case 'Administrador':
       echo '<nav>';
       echo     '<ul class="menu">';
       echo         '<li><a href="./index.php">HOME</a></li>';
       echo         '<li><a href="./cadastrar.php">CADASTRAR</a></li>';
       echo         '<li><a href="./listar.php">LISTAR</a></li>';
       echo         '<li><a href="./sobre.html">SOBRE</a></li>';
       echo         '<li style="margin-right: 500px;"><a href="login.php">LOGIN</a></li>';
       echo         '<li><a href="../controller/logoffatleta.php">LOGOFF</a></li>';
       echo     '</ul>';
       echo '</nav>';
       break;


       case 'Atletas';
       echo '<nav>';
       echo     '<ul class="menu">';
       echo         '<li><a href="./index.php">HOME</a></li>';
       echo         '<li><a href="./cadastrar.php">CADASTRAR</a></li>';
       echo         '<li><a href="./sobre.html">SOBRE</a></li>';
       echo         '<li style="margin-right: 500px;"><a href="login.php">LOGIN</a></li>';
       echo     '</ul>';
       echo '</nav>';
       break;
}


?>