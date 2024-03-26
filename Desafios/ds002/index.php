<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatorio entre 0 e 100</p>
        <?php 
            if(isset($_POST['gerar'])) {
                $numero_aleatorio = rand(0, 100);
                echo "<p>O valor gerado foi <strong>$numero_aleatorio</strong></p>";
            }
        ?>
        <form method="post">
            <input type="submit" name="gerar" value="Gerar Número Aleatório">
        </form>
    </section>
</body>
</html>