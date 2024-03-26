<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor 2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas 2.0</h1>
        <?php 
        $real = $_GET["real"];
        echo "Seus R$ $real equivalem a "
        ?>
        <p>*Cotação obtida diretamente do site do <a href="#" target="_blank">Banco do Brasil</a></p>
        <input type="button" value="Voltar" onclick="window.location.href = 'index.html';">
    </main>
</body>
</html>