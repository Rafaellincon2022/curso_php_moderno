<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Quantidade de Livros</title>
</head>
<body>
    <?php 
        $quantidade_dias = $_GET['quantidade_dias'] ?? 3;
    ?>

    <main>
        <h1>Quantidade de Livros</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="quantidade_dias">Informe a quantidade de dias</label>
            <input type="number" name="quantidade_dias" id="quantidade_dias">
            <input type="submit" value="Verificar">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php 
            $livros_lidos = (int) ($quantidade_dias / 3);
            print "<p>Considerando que consiga ler 1 livro de 250 páginas em 3 dias...</p>";
            print "<p>A quantidade de livros lidos em <strong>$quantidade_dias</strong> dias é de <strong>$livros_lidos</strong> livro(s) </p>"
        ?>
    </section>
</body>
</html>