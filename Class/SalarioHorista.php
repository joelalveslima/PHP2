<?php

require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\Funcionario.php';

class SalarioHorista
{
    public $horas, $dias, $valor;
    protected $salarioHora;
    protected Funcionario $fun;

    public function __construct($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $horasTraba, $diasUteis, $valorHora)
    {
        $this->fun = new Funcionario($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre);

        if (is_float($horasTraba)) {
            $this->sethoras($horasTraba);
        }
        if (is_int($diasUteis > 0)) {
            $this->setdias($diasUteis);
        }
        if (is_float($valorHora >= 0)) {
            $this->setvalor($valorHora);
        }
        $this->horas = $horasTraba;
        $this->dias = $diasUteis;
        $this->valor = $valorHora;
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
        echo  "<br><br>Valor Por Hora R$/h: " . $this->valor . " <br>";
        echo  "Horas Trabalhada: " . $this->horas . " Horas<br>";
        echo  "Dias úteis Trabalhado: " . $this->dias . " Dias <br>";
        echo  "Salário Funcionário R$/h: " . number_format($this->calculoSalarioHorista(), 2);
    }
}
