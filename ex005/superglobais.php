<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Exercícios PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                print "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                print "<h1>Superglobal POST</h1>";
                var_dump($_POST);

            ?>
        </pre>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>