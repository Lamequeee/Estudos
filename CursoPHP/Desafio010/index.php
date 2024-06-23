<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idades</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<? echo $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="n">Ano que você nasceu?</label>
        <input type="number" name="d1" id="d1">

        <label for="n">Que ano você está? Atualmente estamos em <? echo "". date("Y"); ?></label>
        <input type="number" name="d2" id="d2">

        <input type="submit" value="Calcular idade">
        </form>
    </main>

    <section>
        <h2>Calculo da idade</h2>
        <?php 
        $nasceu = $_GET['d1']??0;
        $presente = $_GET['d2']??0;
        $idade = $presente - $nasceu;
        echo "Quem nasceu em ". $nasceu . " vai ter " . $idade . " em ". $presente;
        ?>
    </section>
</body>
</html>