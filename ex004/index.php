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
        <h1>Apresente-se para nós</h1>
    </header>
    <section id="principal">
        <form action="cad.php" method="get">
            <label for="nome">Nome </label>
            <input type="text" name="caixa_nome" id="id_nome">
            <label for="sobrenome">Sobrenome </label>
            <input type="text" name="caixa_sobrenome" id="id_sobrenome">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>