<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Dolar v1.0</h1>
        <?php 
        $real = $_GET["real"];
        $dolar = number_format($real / 4.99, 2);
            echo "Sues R$ $real equivalem a <strong>U$ $dolar </strong><br>";
            echo "<strong>Cotação Fixa de R$ 4.99</strong> informada diretamente no código.<br>";
        ?>
        
        <input type="button" value="voltar" onclick="window.location.href = 'index.html';">
    </main>
</body>
</html>