<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerando numeros aleatórios</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com Números Aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $valor = mt_rand(0, 100);
            echo "O valor gerado foi: <strong>$valor</strong>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar valor</button>
</main>
</body>
</html>