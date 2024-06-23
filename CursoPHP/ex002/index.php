<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHp</title>
</head>
<body>
    <h1>Exemplos de php</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/m/Y <br>");
        echo "E a hora atual é" . date("G:i:s");
    ?>
</body>
</html>