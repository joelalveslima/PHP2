<?php

class Funcionario
{
    protected $nome, $cpf, $inss, $id;


    public function __construct($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre)
    {
        if (is_string($nomeEmpre)) {
            $this->setnome($nomeEmpre);
        }
        if (is_string($cpfEmpre)) {
            $this->setcpf($cpfEmpre);
        }
        if (is_int($inssEmpre)) {
            $this->setinss($inssEmpre);
        }
        if (is_int($idEmpre)) {
            $this->setid($idEmpre);
        }
    }

    public function setnome($nomeEmpre)
    {
        $this->nome = $nomeEmpre;
    }
    public function getnome()
    {
        return $this->nome;
    }

    public function setcpf($cpfEmpre)
    {
        $this->cpf = $cpfEmpre;
    }
    public function getcpf()
    {
        return $this->cpf;
    }

    public function setinss($inssEmpre)
    {
        $this->inss = $inssEmpre;
    }
    public function getinss()
    {
        return $this->inss;
    }

    public function setid($idEmpre)
    {
        $this->id = $idEmpre;
    }
    public function getid()
    {
        return $this->id;
    }


    public function exibirFuncionario()
    {
        echo "<strong>*** Fixa do Funcionário ***</strong>";
        echo "<br><br>ID do Funcionário: " . $this->getid() . "<br>";
        echo "INSS  do Funcionário: " . $this->getinss() . "<br>";
        echo "Nome do Funcionário: " . $this->getnome() . "<br>";
        echo "CPF do Funcionário: " . $this->getcpf();
    }
}
