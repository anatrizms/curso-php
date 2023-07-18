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
        $salario = $_GET['salario'] ?? 0;
        $salarioMinimo = 1380.60;
        $salarioMinimoFormatado = "R\$" . number_format($salarioMinimo, 2, ",",".");
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong><?=$salarioMinimoFormatado?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $salarioMinimoInteiro = intdiv($salario, $salarioMinimo);
            $salarioResto = $salario % $salarioMinimo;

            echo "Quem recebe um salário de R\$" . number_format($salario, 2, ",",".") , " ganha <strong>" . number_format($salarioMinimoInteiro, 0, ",",".") . " salários mínimos</strong> + R\$" . number_format($salarioResto, 2, ",",".") . ".";
        ?>
    </section>
</body>
</html>