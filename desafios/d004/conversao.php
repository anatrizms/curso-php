<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
        // Cotação vinda da API do Banco Central

        $inicio = date("m-d-Y", strtotime("-7 days")); // data início 7 dias antes da data atual
        $fim = date("m-d-Y"); // data fim

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true); // pega os conteúdos da url e guarda na variável dados, true é array, false é object

        $cotacao = $dados["value"]["0"]["cotacaoCompra"];

        // Quantos R$ você tem?
        $real = $_GET["din"] ?? 0;

        // Equivalência em dolar
        $dolar = $real / $cotacao;

        // Mostrar resultado
        echo "<p>Seus R\$" . number_format($real, 2, ",",".") . " equivalem a <strong>US\$" . number_format($dolar, 2, ",",".") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>