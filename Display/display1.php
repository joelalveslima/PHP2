<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/display.css">
    <title>Funcionário Fixo</title>
</head>


<body>
    <?php
    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\EnderecoFuncionaro.php';
    require_once 'D:\XAMPP\htdocs\Atividade05PHP-OO\Class\SalarioFixo.php';

    $nomeEmpre = (string)$_POST['nome'];
    $cpfEmpre = (string)$_POST['cpf'];
    $inssEmpre = (int)$_POST['inss'];
    $idEmpre = (int)$_POST['id'];

    $salarioEmpre = (float)$_POST['salario'];

    $numResidEmpre = (int)$_POST['numresid'];
    $ruaEmpre = (string)$_POST['rua'];
    $bairroEmpre = (string)$_POST['bairro'];
    $cidadeEmpre = (string)$_POST['cidade'];
    $estadoEmpre = (string)$_POST['estado'];


    $fixo = new SalarioFixo($nomeEmpre, $cpfEmpre, $inssEmpre, $idEmpre, $salarioEmpre);

    $endereco = new EnderecoFuncionario($numResidEmpre, $ruaEmpre, $bairroEmpre, $cidadeEmpre, $estadoEmpre);
    ?>
    <div>
        <?php
        $exibir = $fixo->exibirSalarioFixo();
        $exibir = $endereco->exibirEndereco();
        ?>
        <button><a href="../index.php">*** HOMER ***</a></button>
    </div>
</body>

</html>