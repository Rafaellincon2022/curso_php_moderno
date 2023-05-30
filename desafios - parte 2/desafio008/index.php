<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Desafio 008</title>
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Numero</label>
            <input type="number" name="numero" id="numero" min="0">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    
    <section>
        <h1>Resultado Final</h1>
        <?php 
            $raiz_quadrada = $numero ** (1 / 2);
            $raiz_cubica = $numero ** (1 / 3);

            print "Analisando o número <strong>$numero</strong>, temos";
            print "<ul>
                    <li>A sua raiz quadrada é " .number_format($raiz_quadrada, 3). ".</li>
                    <li>A sua raiz cúbica é " .number_format($raiz_cubica, 3). ".</li>
                   </ul>";
        ?>
    </section>
</body>
</html>