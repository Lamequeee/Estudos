<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Notas</h1>    
    <form action="<? echo $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="n"> 1 Valor</label>
        <input type="number" name="v1" id="v1">

        <label for="n"> 1 Peso</label>
        <input type="number" name="p1" id="p1">

        <label for="n"> 2 Valor</label>
        <input type="number" name="v2" id="v2">

        <label for="n"> 2 Peso</label>
        <input type="number" name="p2" id="p2">

        <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Calculo das médias</h2>
        <?php 
        $valor1 = $_GET['v1'];
        $valor2 = $_GET['v2'];

        $peso1 = $_GET['p1'];
        $peso2 = $_GET['p2'];

        $media_simples = ($valor1+$valor2)/2;

        $media_ponderada = (($peso1*$valor1)+($peso2*$valor2))/($peso1+$peso2);
        echo "Media aritmetica simples: " . $media_simples . "<br>";

        echo "Media aritmetica ponderada: ". number_format($media_ponderada, 2, '.', ',');
        ?>
    </section>
</body>
</html>