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
        <h1>Analisador de Número Real</h1>
        <?php 
        $numero = $_GET["numero"] ?? 0; // pega o número do formulário
        echo "Analisando o número <strong>" . number_format($numero, 3, ",","."). "</strong> informado pelo usuário:<br>";

        $inteiro = (int) $numero;
        $fracao = $numero - $inteiro;

        echo "<ul><li>A parte inteira do número é <strong>" . number_format($inteiro, 0, ",",".") . "</strong></li>";
        echo "<li>A parte fracionária do número é <strong>" . number_format($fracao, 3, ",",".") . "</strong></li><ul><br>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>