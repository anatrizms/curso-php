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
        $numero = $_GET['numero'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <p>Analisando o <strong>número<?$numero?></strong>, temos:</p>

        <?php
            // Cálculos
            $raizQuadrada = sqrt($numero);
            $raizCubica = $numero ** (1/3);

            echo "<ul>";
            echo "<li>A sua raíz quadrada é <strong>" . number_format($raizQuadrada, 3, ",","i") . "</strong></li>";
            echo "<li>A sua raíz cúbica é <strong>" . number_format($raizCubica, 3, ",",".") . "</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>