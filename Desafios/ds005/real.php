<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
        $real = $_GET["numero"];
        $inteiro = floor($real);
        $fracionaria = $real - $inteiro;

        echo "Analisando o número <strong>$real</strong> informado pelo usúario:<br>  ";
        echo "A parte inteira do número é $inteiro<br>";
        echo "A parte fracionária do número é $fracionaria";
        ?>
        <!--<ul>
            <li><p>A parte inteira do número é </p></li>
            <li><p>A parte fracionária do número é </p></li>
        </ul> -->
        <input type="button" value="Voltar" onclick="windom.location.href = 'index.html';">
    </main>
</body>
</html>