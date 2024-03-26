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
            $valor = $_GET["numero"];
            $valormaior = $valor + 1;
            $valormenor = $valor - 1;

            echo "O nuémero escolhido foi <strong>$valor</strong> <br>O seu antecessor é $valormenor <br>O seu sucessor é $valormaior";

            echo "<br>"
        ?>
        <input type="button" value="Voltar" onclick="window.location.href = 'index.html';">
    </main>
</body>
</html>