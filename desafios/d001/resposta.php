<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $numero = $_GET["numero"] ?? 0; // se o número não vier, considera como 0
                echo "O número escolhido foi <strong>$numero</strong><br>";
                $antecessor = $numero - 1;
                echo "O seu <em>antecessor</em> é $antecessor<br>";
                $sucessor = $numero + 1;
                echo "O seu <em>sucessor</em> é $sucessor";
            ?>
        </p>
        <!-- history.go(-1) volta para a página anterior de acordo com o histórico -->
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button> <!-- código para símbolos em HTML -->
    </main>
</body>
</html>