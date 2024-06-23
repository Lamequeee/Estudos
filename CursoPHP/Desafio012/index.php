<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calc de tempo</h1>

        <form action="<?echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="n">Qual o total de segundos?</label>
            <input type="number" name="num" id="num">

            <input type="submit" value="calcular">
        </form>
    </main>

    <section>
        <h2>Total de segungos</h2>

        <?php
        $tempo = $_GET['num']??0;

        $sobra = $tempo;
        
        $semana = (int)($sobra / 604800);
        $sobra = $sobra%604800;

        $dia = (int)($sobra/86400);
        $sobra = $sobra%86400;

        $hora = (int)($sobra/3600);
        $sobra = $sobra%3600;

        $minuto = (int)($sobra/60);
        $sobra = $sobra%60;

        $segundos = $sobra;
        
        
        
        
        echo " Analizando o valor que você digitou, <strong>". $tempo ." segundos </strong>, equivalem a um total de: ";

        echo "<ul> 
        <li>". $semana ." semanas
        <li>".$dia." dias
        <li>".$hora." horas
        <li>".$minuto." minutos
        <li>".$segundos." segundos
        </ul>";
        ?>
    </section>
</body>
</html>