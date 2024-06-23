<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    
    <main>
        <div class="resul">
            <?php
            $num = $_GET["num"];
            $antecessor = $_GET["num"] - 1;
            $sucessor = $_GET["num"] + 1;
            echo "O numero que vc escolheu foi: <strong> $num </strong> <br>";
            echo "Antecessor: <strong> $antecessor </strong> <br>";
            echo "Sucessor: <strong> $sucessor </strong>";
            ?>
            <br><br>
            <a href="index.html"><button> <- Voltar</button></a>
        </div>
    </main>
        
    </body>
    </html>