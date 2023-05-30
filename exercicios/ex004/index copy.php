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
        <form action="cad.php" method="get">
            <label for="nome">Número </label>
            <input type="number" name="caixa_numero" id="id_numero">
            <input type="submit" value="Calcular">
        </form>
    </section>
</body>
</html>