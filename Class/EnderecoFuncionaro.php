<?php

class EnderecoFuncionario
{

    protected $numResid, $rua, $bairro, $cidade, $estado;

    public function __construct($numResidEmpre, $ruaEmpre, $bairroEmpre, $cidadeEmpre, $estadoEmpre)
    {
        if (is_int($numResidEmpre)) {
            $this->setnumResid($numResidEmpre);
        }
        if (is_string($ruaEmpre)) {
            $this->setrua($ruaEmpre);
        }
        if (is_string($bairroEmpre)) {
            $this->setbairro($bairroEmpre);
        }
        if (is_string($cidadeEmpre)) {
            $this->setcidade($cidadeEmpre);
        }
        if (is_string($estadoEmpre)) {
            $this->setestado($estadoEmpre);
        }
    }

    public function setnumResid($numResidEmpre)
    {
        $this->numResid = $numResidEmpre;
    }
    public function getnumResid()
    {
        return $this->numResid;
    }

    public function setrua($ruaEmpre)
    {
        $this->rua = $ruaEmpre;
    }
    public function getrua()
    {
        return $this->rua;
    }

    public function setbairro($bairroEmpre)
    {
        $this->bairro = $bairroEmpre;
    }
    public function getbairro()
    {
        return $this->bairro;
    }

    public function setcidade($cidadeEmpre)
    {
        $this->cidade = $cidadeEmpre;
    }
    public function getcidade()
    {
        return $this->cidade;
    }

    public function setEstado($estadoEmpre)
    {
        $this->estado = $estadoEmpre;
    }
    public function getestado()
    {
        return $this->estado;
    }

    public function exibirEndereco()
    {
        echo "<strong><br><br>*** Endereço Funcionário ***</strong>";
        echo    "<br><br>Rua: " . $this->getrua() . " - Nº: " . $this->getnumResid() . " - Bairro:  {$this->getbairro()}" . " - Cidade: " . $this->getcidade() . " - {$this->getestado()}";
    }
}
