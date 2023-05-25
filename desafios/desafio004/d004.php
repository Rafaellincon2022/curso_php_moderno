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
        <h1>Conversor de Moedas versão 2.0</h1>
    </header>
    <main>
        <?php

            $inicio = date('m-d-Y', strtotime('-7 days'));
            $fim = date('m-d-Y');

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.''\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $valor = $_REQUEST["valor_carteira"] ?? 0;

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $conversao = $valor / $cotacao;

            print "<p>Seus R$ ". number_format($valor, 2, ",", ".") . " equivalem a US$ <strong> " . number_format($conversao, 2, ",", ".") . "</strong>.</p>";
            print "<p><strong>*Cotação fixa de R$ " . number_format($cotacao, 2, ",", ".") . "</strong> informada diretamente no código.</p>"

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>