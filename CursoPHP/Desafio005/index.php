<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor real</title>
</head>
<body>
    <h1>Valroes real</h1>

    <?php 
    $num = $_GET["num"];
    $inteiro = $num;
    $resto = $num - intval($num);
    echo "O numero inserido por você foi: $num <br>";

    echo "A parte inteira é: " . intval($inteiro);
    echo "<br> O parte fracionaria é: " .number_format($resto, 2, ',', '.');
    ?>
</body>
</html>