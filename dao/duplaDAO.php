<?php
require_once '../dto/duplaDTO.php';
require_once 'conexao/conexao.php';

class duplaDAO{

    function cadastrarduplas(duplaDTO $duplaDTO){

        $dupla = $duplaDTO->getDupla();
        $nome1 = $duplaDTO->getNome1();
        $cpf1 = $duplaDTO->getCpf1();
        $data1 = $duplaDTO->getData1();
        $sexo1 = $duplaDTO->getSexo1();
        $nome2 = $duplaDTO->getNome2();
        $cpf2 = $duplaDTO->getCpf2();
        $data2 = $duplaDTO->getData2();
        $sexo2 = $duplaDTO->getSexo2();
        $arenatreino = $duplaDTO->getArenatreino();
        $contato = $duplaDTO->getContato();

        // Criando conexão com o SQL

        $banco = new mysqli("localhost","root","","projetof");
        $sql = $banco->query("insert into duplas values('$dupla', '$nome1', '$cpf1', '$data1', '$sexo1', '$nome2', '$cpf2', '$data2', '$sexo2', '$arenatreino', '$contato')");
        return $sql;
        if(!$sql){
            $msg = $banco->error;
            echo $msg;
        }

        

    }

        // Criando a conexao com a string Conexao da pasta DAO/conexao

        function getduplas(){
            $banco = new conexao();
            $conexao = $banco->getConexao();
            $sql = $conexao->query("select * from duplas");
            return $sql;
            
        }


    
        //função para alterar dados do atleta

        function getalterar($dupla){
            $banco = new conexao();
            $conexao = $banco->getConexao();

            $sql = $conexao->query("select * from duplas where dupla = '$dupla'");
            $final = $sql->fetch_assoc();
            if(!$final){
                echo $conexao->error;
            }else{
                return $final;
            }
        }

        function alterardupla(duplaDTO $duplaDTO){

            $dupla = $duplaDTO->getDupla();
            $nome1 = $duplaDTO->getNome1();
            $cpf1 = $duplaDTO->getCpf1();
            $data1 = $duplaDTO->getData1();
            $sexo1 = $duplaDTO->getSexo1();
            $nome2 = $duplaDTO->getNome2();
            $cpf2 = $duplaDTO->getCpf2();
            $data2 = $duplaDTO->getData2();
            $sexo2 = $duplaDTO->getSexo2();
            $arenatreino = $duplaDTO->getArenatreino();
            $contato = $duplaDTO->getContato();

            $bd = new Conexao();
            $conexao = $bd->getConexao();

            $sql = $conexao->query("update duplas set nome1 = '$nome1', cpf1 = '$cpf1', data1 = '$data1', sexo1 = '$sexo1',nome2 = '$nome2', cpf2 = '$cpf2',data2 = '$data2', sexo2 = '$sexo2' , arenatreino = '$arenatreino', contato = '$contato' where dupla = '$dupla'");
            if(!$sql){
                echo $conexao->error;
            }else{
                return $sql;
            }


        }

        // Função de Excluir a dupla, fazendo conexao com o controller

        function excluirdupla($dupla){
            $bd = new Conexao();
            $conexao = $bd->getConexao();
    
            $sql = $conexao->query("delete from duplas where dupla = '$dupla'");
            if(!$sql){
                echo $conexao->error;
            }else{
                return $sql;
            }
        }

        //Cadastrar Campeonato

        function cadastrarcampeonato(campDTO $campDTO){

            $dp = $campDTO->getDp();
            $n1 = $campDTO->getN1();
            $s1 = $campDTO->getN1();
            $n2 = $campDTO->getN2();
            $s2 = $campDTO->getS2();
            $categoria = $campDTO->getCategoria();
            $arena = $campDTO->getArena();
            $tel = $campDTO->getTel();
    
            // Criando conexão com o SQL para cadastrar no campeonato
    
            $banco = new mysqli("localhost","root","","projetof");
            $sql = $banco->query("insert into campeonato values('$dp', '$n1', '$s1', '$n2', '$s2', '$categoria', '$arena', '$tel')");
            return $sql;
            if(!$sql){
                $msg = $banco->error;
                echo $msg;
            }
    
            
    
        }
    }