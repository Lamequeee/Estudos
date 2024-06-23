<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<? echo $_SERVER['PHP_SELF']?>" method="get">

            

            <label for="divi">Dividendo</label>
            <input type="number" name="d1" id="d1">

            <label for="divisor">Divisor</label>
            <input type="number" name="dd" id="dd">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        
        <?php 
        //foi colocado ??0, pois mostrava erro por falta de algum numero quando abria a pagina
        $dividendo = $_GET['d1']??0;
        $divisor = $_GET['dd']??0;
        $inteiro = intdiv($dividendo,$divisor);
        $sobra = $dividendo - ($inteiro*$divisor);
        
        echo "<h1 class=teste1>$dividendo</h1>";
        echo "<div class=linha-vertical><hr size=2></div>";
        echo "<h1 class=teste2>$divisor</h1>";
        echo "<h1 class=teste4>$sobra</h1>";
        echo "<h1 class=teste3>$inteiro</h1>";
        ?>      
    </section>
</body>
</html>