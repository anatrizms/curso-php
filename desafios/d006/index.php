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
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>">
        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">
        <input type="submit" value="Analisar">
    </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            // Cálculos
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

            /* echo "<ul>";
            echo "<li>Dividendo = $dividendo</li>";
            echo "<li>Divisor = $divisor</li>";
            echo "<li>Resultado = $quociente</li>";
            echo "<li>Resto = $resto</li>";
            echo "</ul>"; */
        ?>

        <!-- Imprimir bonitinho -->
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>