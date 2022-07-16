<?php

require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\Funcionario.php';

class SalarioComissionado
{

    protected $valor, $comissao, $salaroComissao;
    protected Funcionario $fun;

    public function __construct($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $valorVendas, $valorComissao)
    {
        $this->fun = new Funcionario($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre);

        if (is_float($valorVendas)) {
            $this->setvalor($valorVendas);
        }
        if (is_float($valorComissao)) {
            $this->setcomissao($valorComissao);
        }
    }

    public  function setvalor($valorVendas)
    {
        $this->valor = $valorVendas;
    }
    public function getvalor()
    {
        return $this->valor;
    }

    public  function setcomissao($valorComissao)
    {
        $this->comissao = $valorComissao / 100;
    }
    public   function getcomissao()
    {
        return $this->comissao;
    }


    public  function calculoComissao()
    {
        $this->salarioComissao = $this->getvalor() * $this->getcomissao();
        return $this->salarioComissao;
    }

    public  function exibirComissao()
    {
        echo $this->fun->exibirFuncionario();
        echo "<strong><br><br>*** Funcionário Comissionado ***</strong>";
        echo "<br><br>Vendas do Funcionário R$: " . number_format($this->getvalor(), 2) . "<br>";
        echo "Valor da Comissão: " . $this->getcomissao() * 100 . " %<br>";
        echo "Comissão do Funcionário R$: " . number_format($this->calculoComissao(), 2);
    }
}
