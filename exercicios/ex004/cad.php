<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "sem nome"; // o que está dentro do array de GET é o que vem do formulário
            $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome"; // se não vier sobrenome na submissão do formulário, vai considerar "sem sobrenome" no local
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site.";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>