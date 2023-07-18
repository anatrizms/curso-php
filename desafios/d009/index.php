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
        $valor1 = $_GET['valor1'] ?? ''; // vazio
        $peso1 = $_GET['peso1'] ?? 1;
        $valor2 = $_GET['valor2'] ?? ''; // vazio
        $peso2 = $_GET['peso2'] ?? 1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">
            <!-- Valor e peso 1 -->
            <label for="valor1">Primeiro valor</label>
            <input type="number" name="valor1" id="valor1" required value="<?=$valor1?>" step="0.01">
            <label for="peso1">Primeiro Peso</label>
            <input type="number" name="peso1" id="peso1" min="1" required value="<?=$peso1?>">

            <!-- Valor e peso 2 -->
            <label for="valor2">Segundo valor</label>
            <input type="number" name="valor2" id="valor2" required value="<?=$valor2?>" step="0.01">
            <label for="peso2">Segundo Peso</label>
            <input type="number" name="peso2" id="peso2" min="1" required value="<?=$peso2?>">

            <!-- Submit -->
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php 
            // Cálculos
            $mediaAritmetica = ($valor1 + $valor2) / 2;
            $mediaPonderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

            // Impressão dos resultados
            echo "<p>Analisando os valores $valor1 e $valor2:</p>";

            echo "<ul>";
            echo "<li>A <strong>média aritmética simples</strong> entre os valores é igual a " . number_format($mediaAritmetica, 2, ",",".") . "</li>";
            echo "<li>A <strong>média aritmética ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($mediaPonderada, 2, ",",".") . "</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>