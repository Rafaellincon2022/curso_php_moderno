<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Desafio 009</title>
</head>
<body>

    <?php 
        $primeiro_valor = $_GET['primeiro_valor'] ?? 0;
        $primeiro_peso = $_GET['primeiro_peso'] ?? 0;
        $segundo_valor = $_GET['segundo_valor'] ?? 0;
        $segundo_peso = $_GET['segundo_peso'] ?? 0;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="primeiro_valor">1º Valor</label>
            <input type="number" name="primeiro_valor" id="primeiro_valor">
            <label for="primeiro_peso">1º Peso</label>
            <input type="number" name="primeiro_peso" id="primeiro_peso">
            <label for="segundo_valor">2º Valor</label>
            <input type="number" name="segundo_valor" id="segundo_valor">
            <label for="segundo_peso">2º Peso</label>
            <input type="number" name="segundo_peso" id="segundo_peso">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <?php 
        $soma = (int) ($primeiro_valor + $segundo_valor);
        $media_simples = $soma / 2;
        $media_ponderada = (int) ($primeiro_valor * $primeiro_peso + $segundo_valor * $segundo_peso) / ($primeiro_peso + $segundo_peso);
    ?>

    <section>
        <h1>Cálculo das Médias</h1>
        <?php 
            print "A soma é $soma";
            print "<p>Analisando os valores $primeiro_valor e $segundo_valor:</p>";
            print "<ul>
                   <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " .number_format($media_simples, 2). "</li>
                   <li>A <strong>Média Aritmética Ponderada</strong> entre os valores é igual a " .number_format($media_ponderada, 2). "</li>
                   </ul>"
        ?>
    </section>

</body>
</html>