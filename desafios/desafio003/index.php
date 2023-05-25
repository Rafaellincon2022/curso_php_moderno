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
    </header>
    <section id="principal">
        <form action="d003.php" method="get">
            <h1>Conversor de Moedas versão 1.0</h1>
            <label for="">Quantos R$ você tem na carteira?</label>
            <input type="number" name="valor_carteira" step="0.01">
            <input type="submit" value="Converter">
        </form>
    </section>
</body>
</html>