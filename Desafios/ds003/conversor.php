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
        $real = $_GET["real"] ?? 0;
        $dolar = number_format($real / 4.99, 2);
            //Formatação Tradicional
            //echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a <strong>US\$ " . number_format($dolar, 2) ."</strong><br>";

            //Formatação de moedas com internacionalização
            $padrao = numfmt_create("pt_BR" , NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $real, "BLR") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
            echo "<strong><br>Cotação Fixa de R$ 4.99</strong> informada diretamente no código.<br>";
        ?>
        
        <input type="button" value="voltar" onclick="window.location.href = 'index.html';">
    </main>
</body>
</html>