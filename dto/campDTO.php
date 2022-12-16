<?php

class campDTO {
    private $dp;
    private $n1;
    private $s1;
    private $n2;
    private $s2;
    private $categoria;
    private $arena;
    private $tel;


    public function getDp()
    {
        return $this->dp;
    }


    public function setDp($dp)
    {
        $this->dp = $dp;

        return $this;
    }


    public function getN1()
    {
        return $this->n1;
    }


    public function setN1($n1)
    {
        $this->n1 = $n1;

        return $this;
    }


    public function getS1()
    {
        return $this->s1;
    }


    public function setS1($s1)
    {
        $this->s1 = $s1;

        return $this;
    }


    public function getN2()
    {
        return $this->n2;
    }

 
    public function setN2($n2)
    {
        $this->n2 = $n2;

        return $this;
    }

 
    public function getS2()
    {
        return $this->s2;
    }


    public function setS2($s2)
    {
        $this->s2 = $s2;

        return $this;
    }


    public function getCategoria()
    {
        return $this->categoria;
    }


    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }


    public function getArena()
    {
        return $this->arena;
    }


    public function setArena($arena)
    {
        $this->arena = $arena;

        return $this;
    }


    public function getTel()
    {
        return $this->tel;
    }


    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
}


?>