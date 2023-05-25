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
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["caixa_numero"] ?? 0;
            // 1ª forma de apresentar
            /*$antecessor = $numero - 1;
            $sucessor = $numero + 1;
            print "<p>O número escolhido foi: <strong>$numero</strong>.</p>";
            print "<p>O seu antecessor é $antecessor.";
            print "<p>O seu sucessor é $sucessor.";*/

            //Outra forma de apresentar o resultado
            print "<p>O <em>ANTECESSOR</em> de $numero é " . $numero - 1 . "\n";
            print "<p>O <em>SUCESSOR</em> de $numero é " . $numero + 1 . "\n";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>