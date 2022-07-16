<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/display.css">
    <title>Funcionário Comissão com Piso Salarial</title>
</head>

<body>
    <?php

    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\EnderecoFuncionaro.php';
    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\SalarioComissionadoPisoSalarial.php';


    $nomeEmpre = (string)$_POST['nome'];
    $cpfEmpre = (string)$_POST['cpf'];
    $inssEmpre = (int)$_POST['inss'];
    $idEmpre = (int)$_POST['id'];

    $pisoSalario = (float)$_POST['pisosalario'];

    $valorVendas = (float)$_POST['valorvenda'];
    $valorComissao = (float)$_POST['valorcomissao'];

    $numResidEmpre = (int)$_POST['numresid'];
    $ruaEmpre = (string)$_POST['rua'];
    $bairroEmpre = (string)$_POST['bairro'];
    $cidadeEmpre = (string)$_POST['cidade'];
    $estadoEmpre = (string)$_POST['estado'];

    $comissaoPiso = new SalarioComissionadoPisoSalarial($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $pisoSalario, $valorVendas, $valorComissao);

    $endereco = new EnderecoFuncionario($numResidEmpre, $ruaEmpre, $bairroEmpre, $cidadeEmpre, $estadoEmpre);


    ?>
    <div>
        <?php
        $exibir = $comissaoPiso->exibirComissaoPiso();
        $exibir = $endereco->exibirEndereco();
        ?>
        <button><a href="../index.php">*** HOMER ***</a></button>
    </div>
</body>

</html>