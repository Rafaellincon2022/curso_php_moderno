<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas versão 1.0</h1>
    </header>
    <main>
        <?php 
            $valor = floatval(str_replace(',','.', $_GET['valor_carteira']));
            $conversao = $valor / 4.97;
            $valor_formatado = number_format($conversao, 2, ',', '.');
            print "<p>Seus R$ ". number_format($valor, 2, ",", ".") . " equivalem a US$ <strong>$valor_formatado</strong>.</p>";
            print "<p><strong>*Cotação fixa de R$ 4,97</strong> informada diretamente no código.</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>