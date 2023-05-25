<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Interação com Formulários</title>
</head>
<body>
    <header>
        <h1>Informe um número</h1>
    </header>
    <section id="principal">
        <form action="index.php" method="get">
            <?php 
                $numeroSorteado = rand(0, 100);
                print "<p>Gerando um número aleatório entre 0 e 100...</p>";
                print "<p>O número escolhido foi <strong>$numeroSorteado</strong>.</p>"
            ?>
            <input type="submit" value="🔃 &#x1F503 Gerar outro">
        </form>
    </section>
</body>
</html>