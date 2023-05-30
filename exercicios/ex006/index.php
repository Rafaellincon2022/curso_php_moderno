<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Exercício PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
    ?>
    <main>
        <h2>Somador de Valores</h2>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado da Soma</h2>
        <?php
            $soma = (int) $valor1 + (int) $valor2;
            print "<p>O resultado entre $valor1 e $valor2 é igual a $soma.</p>";
        ?>
    </section>
</body>
</html>