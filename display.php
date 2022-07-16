<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\EnderecoFuncionaro.php';
    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\Funcionario.php';
    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\SalarioFixo.php';
    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\SalarioHorista.php';
    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\SalarioHoristaFixo.php';
    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\SalarioComissionado.php';
    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\SalarioComissionadoPisoSalarial.php';



    // $fixo = new SalarioFixo('joel', '000.000.000-001', 1, 1, 1200.0);
    // $horista = new SalarioHorista('joel', '000.000.000-001', 1, 01, 7.33, 24, 4.26);
    // $horistaFixo = new SalarioHoristaFixo('joel', '000.000.000-001', 1, 1, 1200, 4.26, 24, 40);
    // $comissao =  new SalarioComissionado('joel', '000.000.000-001',1, 1, 35000, 8);
    $comissaoPiso = new SalarioComissionadoPisoSalarial('joel','000',1,1,1200.0,35000,8);


    $endereco = new EnderecoFuncionario(5290, 'Rua Abacaxi', 'Calafate', 'Rio Branco', 'Acre');


    // echo $fixo->exibirSalarioFixo();
    // echo $horista->exibirSalarioHorista();
    // echo $horistaFixo->exibirSalarioHoristaFixo();
    // echo $comissao->exibirComissao();
    echo $comissaoPiso->exibirComissaoPiso();
    echo $endereco->exibirEndereco();



    ?>
</body>

</html>