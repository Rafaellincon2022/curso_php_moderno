<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Salário</title>
</head>
<body>

    <?php 
        $salario_minimo = 1_320.00;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salario = $_GET['caixa_salario'] ?? $salario_minimo;
    ?>

    <section>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="l_salario">Salário (R$)</label>
            <input type="number" name="caixa_salario">
            <label for="l_informativo">Considerando o salário mínimo de <strong><?=numfmt_format_currency($padrao, $salario_minimo, "BRL")?></strong> </label>
            <input type="submit" value="Calcular">
        </form>
    </section>

    <?php 
        $quantidadeSalarioMinimo = floor($salario / $salario_minimo);
        $valor_restante = $salario % $salario_minimo;
    ?>

    <section>
        <h1>Resultado Final</h1>
        <label for="l_resultado">Quem recebe um salário de <?=numfmt_format_currency($padrao, $salario, "BRL")?> ganha <strong><?=$quantidadeSalarioMinimo?> salário(s) mínimo(s)</strong> + <?=numfmt_format_currency($padrao, $valor_restante, "BRL")?></label>
    </section>

</body>
</html>