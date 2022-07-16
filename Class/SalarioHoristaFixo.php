<?php

require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\Funcionario.php';
require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\SalarioFixo.php';
require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\SalarioHorista.php';

class SalarioHoristaFixo
{
    protected SalarioHorista $hori;
    protected SalarioFixo $fixo;
    protected Funcionario $fun;
    public $salarioFinal;

    public function __construct($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $salarioEmpre, $horasTraba, $diasUteis, $valorHora)
    {
        $this->fun = new Funcionario($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre);
        $this->fixo = new SalarioFixo($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $salarioEmpre);
        $this->hori = new SalarioHorista($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $horasTraba, $diasUteis, $valorHora);
        $this->diasUteis = $diasUteis;
        $this->valorHora = $valorHora;
        $this->salarioEmpre = $salarioEmpre;
    }

    public  function calculoSalarioHoristaFixo()
    {
        if ($this->hori->gethoras() <= 40.0) {
            $this->salarioFinal = ($this->hori->gethoras() * $this->diasUteis) * $this->valorHora;
            return $this->salarioFinal + $this->salarioEmpre;
        } else {
            return " O funcionário não pode fazer hora extra, então so irá recebe o salário fixo R$: {$this->salarioEmpre} ";
        }
    }


    public  function exibirSalarioHoristaFixo()
    {
        echo $this->fun->exibirFuncionario();
        echo "<strong><br><br>*** Funcionário Horista Fixo ***</strong>";
        echo "<br><br>Dias úteis Trabalhados: " . $this->diasUteis . " <br>";
        echo "Horas Trabalhadas: " . $this->hori->gethoras()  . " <br>";
        echo "Valor da Hora R$/h: " . number_format($this->valorHora, 2) . " <br>";
        echo "Salário Fixo R$: " . number_format($this->salarioEmpre, 2) . " <br>";
        echo "Salário + comissão do Funcionário R$: " . number_format($this->calculoSalarioHoristaFixo(), 2);
    }
}
