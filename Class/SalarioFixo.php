<?php


require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\Funcionario.php';


class SalarioFixo
{
    public $salario;
    protected Funcionario $fun;

    public function __construct($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $salarioEmpre)
    {
        $this->fun = new Funcionario($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre);

        if (is_float($salarioEmpre)) {
            $this->setsalario($salarioEmpre);
        }
    }

    public  function setsalario($salarioEmpre)
    {
        $this->salario = $salarioEmpre;
    }
    public function getsalario()
    {
        return $this->salario;
    }



    public  function calculoSalarioFixo()
    {
        if ($this->salario > 0) {
            $this->salario = $this->salario;
            return $this->salario;
        } else {
            return "O funcionário não pode receber salário '0' ou negativo.";
        }
    }

    public  function exibirSalarioFixo()
    {
        echo $this->fun->exibirFuncionario();
        echo "<strong><br><br>*** Funcionário Salário Fixo ***<br></strong>";
        echo "<br>Salário Funcionário R$: " . number_format($this->calculoSalarioFixo(), 2);
    }
}
