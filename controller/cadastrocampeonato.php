<?php

require_once '../dto/campDTO.php';
require_once '../dao/duplaDAO.php';


 $dp = $_POST['dp'];
 $n1 = $_POST['n1'];
 $s1 = $_POST['s1'];
 $n2 = $_POST['n2'];
 $s2 = $_POST['s2'];
 $categoria = $_POST['categoria'];
 $arena = $_POST['arena'];
 $tel = $_POST['tel'];

     // Setando a string

     $campDTO = new campDTO();

     $campDTO->setDp($dp);
     $campDTO->setN1($n1);
     $campDTO->setS1($s1);
     $campDTO->setN2($n2);
     $campDTO->setS2($s2);
     $campDTO->setCategoria($categoria);
     $campDTO->setArena($arena);
     $campDTO->setTel($tel);
    
     $campDAO = new duplaDAO();
     $ok = $campDAO->cadastrarcampeonato($campDTO);
    
     if($ok){
         echo "<script> alert('Boa Sorte no Campeonato!!') </script>";
     }



?>