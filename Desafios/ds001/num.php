<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>ResultadoFinal</h1>
        <?php 
            $valor = $_GET["numero"] ?? 0;
            $valormaior = $valor + 1; 

            echo "O nuémero escolhido foi <strong>$valor</strong> <br>"; 
            echo "O seu <em>antecessor é ". $valor - 1 ."<br>"; // Aqui foi contatenado o valor ja realizando a conta diretamente (economia de memoria).
            echo "O seu <em>sucessor é $valormaior<br>"; // Já no segundo resultado foi declarada a variavel e esta passando somente o valor do resultado.
            
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    </main>
</body>
</html>