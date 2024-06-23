<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<? echo $_SERVER['PHP_SELF']?>" method="get">

        <label for="sal">Salario R$</label>
        <input type="number" name="s1" id="s1" step="any">
        <p>Considerando o salario miniumo de R$1.380,00</p>

        <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        
        <?php 
        $salario = $_GET['s1'];
        $valor = intdiv($salario, 1380);
        $sobra = $salario-($valor*1380);
        echo "Quem recebe: R$" . number_format($salario, 2, ',', '.'). " ganha <strong>".$valor." salario minimo </strong>+ R$". number_format($sobra, 2, ',', '.');
        ?>


    </section>
</body>
</html>