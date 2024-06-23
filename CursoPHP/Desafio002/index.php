<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero aleatorio</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   
    <main>
<div class="container">
    
            <h1>Num aleatorio</h1>
    
            <p>Gerando um numero de 0 a 100</p>
            <?php
            
            $gen = $_GET["gerador"] = rand(0, 100);


            echo " O numero aleatorio é: $gen ";

            
            ?>
    <br>
    <form action="index.php" method="get">
            <button name="gerador">Gerar numero</button>
    </form>

    
</div>
    </main>

</body>
</html>