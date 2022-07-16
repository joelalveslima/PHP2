<?php

require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\Funcionario.php';

class SalarioHorista
{
    protected $horas, $dias, $valor;
    protected $salarioHora;
    protected Funcionario $fun;

    public function __construct($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $horasTraba, $diasUteis, $valorHora)
    {
        $this->fun = new Funcionario($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre);

        if ($horasTraba) {
            $this->sethoras($horasTraba);
        }
        if ($diasUteis > 0) {
            $this->setdias($diasUteis);
        }
        if ($valorHora >= 0) {
            $this->setvalor($valorHora);
        }
    }

    public  function sethoras($horasTraba)
    {
        $this->horas = $horasTraba;
    }
    public function gethoras()
    {
        return $this->horas;
    }

    public  function setdias($diasUteis)
    {
        $this->dias = $diasUteis;
    }
    public  function getdias()
    {
        return $this->dias;
    }

    public  function setvalor($valorHora)
    {
        $this->valor = $valorHora;
    }
    public  function getvalor()
    {
        return $this->valor;
    }


    public  function calculoSalarioHorista()
    {
        return $this->salarioHora = ($this->gethoras() * $this->getdias()) * $this->getvalor();
    }

    public  function exibirSalarioHorista()
    {
        echo $this->fun->exibirFuncionario();
        echo  "<strong><br><br>*** Funcionário Horista ***</strong>";
        echo  "<br><br>Valor Por Hora R$: " . $this->getvalor() . "<br>";
        echo  "Horas Trabalhada: " . $this->gethoras() . " Horas<br>";
        echo  "Dias úteis Trabalhado: " . $this->getdias() . " Dias <br>";
        echo  "Salário Funcionário R$: " . $this->calculoSalarioHorista();
    }
}
