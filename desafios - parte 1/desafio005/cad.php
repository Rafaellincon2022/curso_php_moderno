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
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php
        // Primeira Forma
            /*
            $numero = floatval(str_replace(',', '.', $_GET['caixa_numero']));
            $quebra = explode('.', $numero);
            $numero_inteiro = $quebra[0];
            $numero_fracionado = number_format($quebra[1]);
            */

        // Segunda Forma
            $numero = $_REQUEST['caixa_numero'] ?? 0;
            $numero_inteiro = (int) $numero;
            $numero_fracionado = $numero - $numero_inteiro ;

            print "<p>Analisando o número <strong>" . number_format($numero, 2, ',', '.') . "</strong> informado pelo usuário:</p>";
            print "<ul><li>A parte inteira do número é <strong>" . number_format($numero_inteiro, 0, ',', '.') . "</strong>.</li>";
            print "<li>A parte fracionária do número é <strong>" . number_format($numero_fracionado, 3) . "</strong>.</li></ul>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>