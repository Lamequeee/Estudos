<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc dinheiro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="<? echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n">Qual o valor para sacar?</label>
            <input type="number" name="num" id="num" step="5">

            <input type="submit" value="Calc">
        </form>
    </main>

    <section>
        <?php 
        $money = $_GET['num'];
        echo "<h2>Saque de $".number_format($money, 2)." realizado</h2>";

        echo "O caixa vai te disponibilizar as sequintes notas: ";

        $sobra = $money;

        $cem = (int)($sobra/100);
        $sobra = $sobra%100;

        $cinquenta = (int)($sobra/50);
        $sobra = $sobra%50;

        $dez = (int)($sobra/10);
        $sobra = $sobra%10;
       
        $cinco = (int)($sobra/5);

        echo "<ul> 
        <li> 100: ".$cem."
        <li> 50: ".$cinquenta."
        <li> 10: ".$dez."
        <li> 5: ".$cinco."
        </ul>"
        ?>
    </section>
</body>
</html>