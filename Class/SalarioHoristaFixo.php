<?php

require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\Funcionario.php';

class SalarioHoristaFixo
{

    protected $salario, $salarioFinal, $valor, $dias, $horas;
    protected Funcionario $fun;





    public function __construct($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $salarioFixo, $valorHora, $diasUteis, $horasTraba)
    {
        $this->fun = new Funcionario($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre);

        if ($salarioFixo) {
            $this->setsalariofixo($salarioFixo);
        }
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

    public  function setsalariofixo($salarioFixo)
    {
        $this->salario = $salarioFixo;
    }
    public  function getsalariofixo()
    {
        return $this->salario;
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

    public  function calculoSalarioHoristaFixo()
    {
        if ($this->horas <= 40.0) {
            $this->salarioFinal = ($this->gethoras() * $this->getdias()) * $this->getvalor();
            return $this->salarioFinal + $this->getsalariofixo();
        } else {
            return " O funcionário não pode fazer hora extra, então so irá recebe o salário fixo R$: {$this->getsalariofixo()}";
        }
    }

    public  function exibirSalarioHoristaFixo()
    {
        echo $this->fun->exibirFuncionario();
        echo "<strong><br><br>*** Funcionário Horista Fixo ***</strong>";
        echo "<br><br>Dias úteis Trabalhada: " . $this->getdias() . " Dias<br>";
        echo "Horas Trabalhadas: " . $this->horas  . " Horas Semanal<br>";
        echo "Valor da Hora R$: " . $this->valor . " R$/h<br>";
        echo "Salário Fixo R$: " . $this->salario . " Mensal<br>";
        echo "Salário + comissão do Funcionário R$: " . $this->calculoSalarioHoristaFixo();
    }
}
