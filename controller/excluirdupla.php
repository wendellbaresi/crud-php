<?php
require_once '../dao/duplaDAO.php';

$dupla = $_GET['dupla'];

$duplaDAO = new duplaDAO();
$ok = $duplaDAO->excluirdupla($dupla);
if($ok){
    echo "<script> alert('Deseja Excluir Mesmo??') </script>";
}
?>