<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <?php 
            //Cotação em Dólar
            $cotacao = 4.97;  
            
            //Quanto tenho em $$?
            $valor = 1875;

            //Equivalência em Dólar
            $dolar = $valor / $cotacao;

            //Mostrar o resultado
            print "Você possui R$ " . number_format($valor, 2, ",", ".") . " que equivalem a US$ " . number_format($dolar, 2, ",", ".") . ".";
        ?>
    </main>
</body>
</html>