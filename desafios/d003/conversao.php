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
        // Cotação copiada do Google
        $cotacao = 4.83;

        // Quantos R$ você tem?
        $real = $_GET["din"] ?? 0;

        // Equivalência em dolar
        $dolar = $real / $cotacao;

        // Mostrar resultado
        echo "<p>Seus R\$" . number_format($real, 2, ",",".") . " equivalem a <strong>US\$" . number_format($dolar, 2, ",",".") . "</strong></p>";

        // Formatação de moedas com internacionalização
        // Biblioteca intl (Internationalization PHP)

        // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        // echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>