<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Desafio 010</title>
</head>
<body>

    <?php 
        $atual = date('Y');
        $ano_nascimento = $_GET['ano_nascimento'] ?? $atual;
        $ano_informado = $_GET['ano_informado'] ?? $atual;
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <h1>Calculando sua idade</h1>
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano_nascimento" id="ano" min="1900" max="<?=$atual - 1?>" value="<?=$ano_nascimento?>" required>
            <label for="idade">Deseja saber sua idade em que ano? (Atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano_informado" id="idade" min="1900" value="<?=$ano_informado?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h1>Resultado</h1>
        <?php 
            $idade = (int) ($ano_informado - $ano_nascimento);
            print "<p>Quem nasceu em $ano_nascimento vai ter <strong>$idade anos</strong> em $ano_informado!</p>"
        ?>
    </section>
</body>
</html>