<?php

class duplaDTO {
    private $dupla;
    private $nome1;
    private $cpf1;
    private $data1;
    private $sexo1;
    private $nome2;
    private $cpf2;
    private $data2;
    private $sexo2;
    private $arenatreino;
    private $contato;



    public function getDupla()
    {
        return $this->dupla;
    }


    public function setDupla($dupla)
    {
        $this->dupla = $dupla;

        return $this;
    }


    public function getNome1()
    {
        return $this->nome1;
    }


    public function setNome1($nome1)
    {
        $this->nome1 = $nome1;

        return $this;
    }

 
    public function getCpf1()
    {
        return $this->cpf1;
    }


    public function setCpf1($cpf1)
    {
        $this->cpf1 = $cpf1;

        return $this;
    }


    public function getData1()
    {
        return $this->data1;
    }

 
    public function setData1($data1)
    {
        $this->data1 = $data1;

        return $this;
    }


    public function getSexo1()
    {
        return $this->sexo1;
    }


    public function setSexo1($sexo1)
    {
        $this->sexo1 = $sexo1;

        return $this;
    }


    public function getNome2()
    {
        return $this->nome2;
    }

 
    public function setNome2($nome2)
    {
        $this->nome2 = $nome2;

        return $this;
    }


    public function getCpf2()
    {
        return $this->cpf2;
    }


    public function setCpf2($cpf2)
    {
        $this->cpf2 = $cpf2;

        return $this;
    }


    public function getData2()
    {
        return $this->data2;
    }


    public function setData2($data2)
    {
        $this->data2 = $data2;

        return $this;
    }

 
    public function getSexo2()
    {
        return $this->sexo2;
    }

 
    public function setSexo2($sexo2)
    {
        $this->sexo2 = $sexo2;

        return $this;
    }


    public function getArenatreino()
    {
        return $this->arenatreino;
    }


    public function setArenatreino($arenatreino)
    {
        $this->arenatreino = $arenatreino;

        return $this;
    }


    public function getContato()
    {
        return $this->contato;
    }


    public function setContato($contato)
    {
        $this->contato = $contato;

        return $this;
    }
}


