<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        //usamos o ?? quando não tem nada escrito, ele só é usado quando não temos uma estrutura condional ( os IF e else )...( não utilize isso );
        
        $nome = $_GET["nome"] ?? "sem nome";
        $snome = $_GET["snome"] ?? "sem nome";
        echo "Olá, $nome $snome, qual seu pedido";

           // var_dump($_GET); 
           //$REQUEST é uma junção de $_GET, $_POST e $_COOKIES
        ?>
    </main>
</body>
</html>