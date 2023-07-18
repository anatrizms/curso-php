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
    <?php 
        $precoProduto = $_GET['preco'] ?? '0';
        $percentReajuste = $_GET['reajuste'] ?? '0';
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <!-- Preço do Produto -->
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$precoProduto?>">

            <!-- Reajuste -->
            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$percentReajuste?>">
            <input type="submit" value="Reajustar">
        </form>

        <?php 
            // Cálculos
            $aumento = $precoProduto * $percentReajuste / 100;
            $novoPreco = $precoProduto + $aumento;
        ?>

        <section>
            <h2>Resultado do Reajuste</h2>
            <p>O produto que custava R$<?=number_format($precoProduto, 2, ",",".")?>, com <strong><?=$percentReajuste?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novoPreco, 2, ",",".")?></strong> a partir de agora.</p>
        </section>

        <script>
            // Declarações automáticas
            mudaValor(); // assim que atualiza a página já chama a função muda valor

            function mudaValor() {
                p.innerText = reajuste.value; // conteúdo dentro de p vai mudar
            }
        </script>
    </main>
</body>
</html>