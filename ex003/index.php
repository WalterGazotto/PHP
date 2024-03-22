<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primítivos</h1>
    <?php 
    // 0x = hexadecimal
    // 0b = binário
    // 0 = octal
        $num = 100;
        echo "O valor da variável é $num ";

    // var_dump() para testar o tipo primitivo de cada variavel.
        $v = "walter";
        var_dump($v);   

    // 3e2 siginifica  3 x 10² 
        $val = 3e2;
        echo " valor é $val";
        var_dump($val);

    // Para fazer uma coerção ( forçar o tipo primitivo )
        $vale = (integer) 4e3;
        var_dump($vale);

        $name = (float) "900";
        var_dump($name);
    ?>
</body>
</html>