<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor convertido v2</title>
    
</head>
<body>
    <h1>Valor convertido de Real para dolar</h1>

    <?php 
  
    // Função para obter a taxa de câmbio do dólar em uma data específica
    function obterCotacaoDolar($dataCotacao) {
        // URL da API com a data da cotação
        $apiUrl = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='{$dataCotacao}'&\$top=100&\$format=json";
    
        // Inicializar cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        // Executar a solicitação e obter a resposta
        $response = curl_exec($ch);
        curl_close($ch);
    
        // Decodificar a resposta JSON
        $data = json_decode($response, true);
    
        // Verificar se a resposta contém dados válidos
        if (isset($data['value'][0])) {
            return $data['value'][0];
        } else {
            return null;
        }
    }
    
    // Data desejada para a cotação
    $dataCotacao = '05-24-2023';
    
    // Obter a cotação do dólar
    $cotacao = obterCotacaoDolar($dataCotacao);
    
    if ($cotacao) {
        //pegando o valor escrito da tela index.html
        $real = $_GET["real"];
        //calculando a conversão do real para o dolar
        $dinheiro = $real / $cotacao['cotacaoCompra'];
        
        echo "Voce tem $real mas em dolar você terá: " . number_format($dinheiro, 2, ',', '.');
    } else {
        //se houver algum erro irá aparecer essa resposta
        echo "Não foi possível obter a cotação para a data especificada.";
    }
    
    ?>



</body>
</html>