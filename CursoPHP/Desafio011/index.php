<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço reajuste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Preço com reajuste</h1>
        <form action="<? echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n">Preço do produto</label>
            <input type="number" name="num" id="num">
<!--EXPLICAR O ID-->
            <label for="r">Reajuste "(<p id="resultado1">)"</p> </label>
            
            <input type="range" id="price" name="re" id="re" value="0" min="0" max="100">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h1>Preço do reajuste</h1>

        
        <?php
        //COLOCAR COMENTARIO EXPLICANDO OQ FEZ 
        $preco = $_GET['num'];
        $reajuste = $_GET['re'];
        $calc = ($reajuste/100)*$preco;
        $total = $calc + $preco; 
        echo "O preço do produto é ". $preco ." com ". $reajuste ." de aumento vai passar a custar ". $total;
        ?>
    </section>

    <script>
         //COLOCAR COMENTARIO EXPLICANDO OQ FEZ 
         var p = document.getElementById("price"),
         res1 = document.getElementById("resultado1"),
         res2 = document.getElementById("resultado2");

          //COLOCAR COMENTARIO EXPLICANDO OQ FEZ E TROCAR NOMES
        p.addEventListener("input", function () {
           res1.innerHTML = p.value;
        }, false);
    p.addEventListener("mouseup", function () {
        res2.innerHTML = p.value;
        }, false);
         //COLOCAR COMENTARIO EXPLICANDO OQ FEZ 
    </script>
</body>
</html>