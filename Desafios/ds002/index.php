<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatorio entre 0 e 100</p>
        <?php 
            $valor = mt_rand(0, 100);
            echo "O número aleatório é : <strong>$valor";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar número</button>
        </main>
</body>
</html>