<?php

require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\Funcionario.php';
require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\SalarioComissionado.php';

class SalarioComissionadoPisoSalarial
{

    protected $piso, $salarioFinal;
    protected Funcionario $fun;
    protected SalarioComissionado $comi;

    public function __construct($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $pisoSalario, $valorVendas, $valorComissao)
    {
        $this->fun = new Funcionario($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre);
        $this->comi = new SalarioComissionado($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $valorVendas, $valorComissao);

        if (is_float($pisoSalario)) {
            $this->setpiso($pisoSalario);
        }
    }

    public  function setpiso($pisoSalario)
    {
        $this->piso = $pisoSalario;
    }
    public function getpiso()
    {
        return $this->piso;
    }

    public  function calculoComissaoPiso()
    {
        $this->salarioFinal = $this->piso + $this->comi->calculoComissao();
        return $this->salarioFinal;
    }

    public  function exibirComissaoPiso()
    {
        echo $this->fun->exibirFuncionario();
        echo "<strong><br><br>*** Funcionário Comissionado Com Piso Salárial ***</strong>";
        echo "<br><br>Piso Salárial do Funcionário R$: " . number_format($this->getpiso(), 2) . " <br>";
        echo "Total de venda do Funcionário R$: " . number_format($this->comi->getvalor(), 2) . "<br>";
        echo "Comissão do Funcionário: " . $this->comi->getcomissao() * 100 . " %<br>";
        echo "Valor da Comissão R$: " . number_format($this->comi->calculoComissao(), 2) . "<br>";
        echo "Salário + Comissão R$: " . number_format($this->calculoComissaoPiso(), 2);
    }
}
