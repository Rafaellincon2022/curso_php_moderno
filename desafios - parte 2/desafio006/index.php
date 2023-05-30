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
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>

    <section>
        <h1 style="text-align: center;">Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="l_dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>">
            <label for="l_divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>

    <?php 
        $resultado = intdiv($dividendo, $divisor); // ou pode ser assim: (int) ($dividendo / $divisor)
        $resto = $dividendo % $divisor;
        // Essa foi uma das formas apresentadas pelo professor na aula
        /*
        print "<ul>";
        print "<li>Dividendo: $dividendo</li>";
        print "<li>Divisor: $divisor</li>";
        print "<li>Resultado: $resultado</li>";
        print "<li>Resto: $resto</li>";
        print "</ul>";
        */
    ?>

    <table class="divisao">
        <tr>
            <td><?=$dividendo?></td>
            <td><?=$divisor?></td>
        </tr>
        <tr>
            <td><?=$resto?></td>
            <td><?=$resultado?></td>
        </tr>
    </table>


<!-- Essa estrutura abaixo eu fiz baseado no ChatGPT 
    <main>
        <h1>Estrutura da Divisão</h1>
        <p>Dividendo = <?=$dividendo?></p>
        <p>Divisor = <?=$divisor?></p>
        <p>Resultado = <?=$resultado?></p>
        <p>Resto = <u><?=$resto?></u></p>
    </main>
-->
    </section>
</body>
</html>