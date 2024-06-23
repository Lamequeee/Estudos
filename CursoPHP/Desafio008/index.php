<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe um numero</h1>
        <form action="<? echo $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="n">numero</label>
        <input type="number" name="v1" id="v1">

        <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
        $valor = $_GET['v1'];
        //A raiz quadrada além de ter a função SQRT() ela pode ser calculada tbm com **1/2
        $ra = sqrt($valor);
        //a raiz cubica pode ser calculada com 1/3 sendo potencia do valor inserido
        $cu = $valor**(1/3);
        
        echo "Analisando o <strong> numero ".$valor."</strong>, temos: <br>";

        echo"A sua raiz quadrada é: " . number_format($ra, 2, ',', '.'). "<br>";
        echo"A sua raiz cubica é: ". number_format($cu, 2, ',', '.');
        ?>
    </section>
</body>
</html>