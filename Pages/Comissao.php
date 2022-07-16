<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/pages.css">
    <title>Salário Comissão</title>
</head>

<body>
    <header>Funcionario Categoria Comissão</header>
    <div>
        <form action="../Display/display4.php" method="post">

            <label>Nome</label><input type="text" name="nome">

            <label>CPF</label><input maxlength="11" pattern="[0-9]{11}" title="CPF Inválido" type="text" name="cpf">

            <label>INSS</label><input type="text" name="inss">

            <label>ID</label><input type="text" name="id" maxlength="3" pattern="[0-9]" title="So Aceita números">

            <!-- ---------------------------------------------------------------- -->

            <label>Valor Total de venda</label><input type="text" name="valorvenda">

            <label>Valor da comissão</label><input type="text" name="valorcomissao">

            <!-- ---------------------------------------------------------------- -->

            <label>Núm da Residência</label><input type="text" name="numresid">

            <label>Rua</label><input type="text" name="rua">

            <label>Bairro</label><input type="text" name="bairro">

            <label>Cidade</label><input type="text" name="cidade">

            <label>Estado</label><input type="text" name="estado">

            <input class="btn" type="submit" value="ENVIAR">
        </form>
    </div>
</body>

</html>