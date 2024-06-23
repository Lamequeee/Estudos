<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor convertido v1</title>
</head>
<body>
    <h1>Valor convertido de Real para dolar</h1>

    <?php 
    $real = $_GET["real"];
    $dinheiro = $_GET["real"] / 5.22;

    echo "O valor do dolar será de 5,22 <br>";
    echo "Sua carteira tem: $real, o valor de real para dolar fica: " . number_format(round($dinheiro),2,",",".");
    ?>
</body>
</html>