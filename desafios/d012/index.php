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
        $totalSegundos = $_GET['segundos'] ?? '0';
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <!-- Formulário -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" required value="<?=$totalSegundos?>">
            <input type="submit" value="Calcular">
        </form>

        <section>
            <h2>Totalizando tudo</h2>
            <p>Analisando o valor que você digitou, <strong><?=$totalSegundos?> segundos</strong> equivalem a um total de:</p>
    
            <?php
            // Cálculo - Semanas
            $semanas = $totalSegundos / 604800;
            $restoSemanas = $totalSegundos % 604800;

            // Cálculo - Dias
            $dias = $restoSemanas / 86400;
            $restoDias = $restoSemanas % 86400;

            // Cálculo - Horas
            $horas = $restoDias / 3600;
            $restoHoras = $restoDias % 3600;

            // Cálculo - Minutos
            $minutos = $restoHoras / 60;
            $segundos = $restoHoras % 60; // o que sobrou em segundos
            ?>

            <ul>
                <li><p><?=(int)$semanas?> semanas</p></li>
                <li><p><?=(int)$dias?> dias</p></li>
                <li><p><?=(int)$horas?> horas</p></li>
                <li><p><?=(int)$minutos?> minutos</p></li>
                <li><p><?=(int)$segundos?> segundos</p></li>
            </ul>
        </section>
    </main>
</body>
</html>