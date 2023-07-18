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
        $anoNasc = $_GET['anoNasc'] ?? '2000';
        $ano = $_GET['ano'] ?? date('Y');
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc" min="1900" max="<?=date('Y')?>" value="<?=$anoNasc?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=date('Y')?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $resposta = $ano - $anoNasc;

            echo "Quem nasceu em $anoNasc vai ter <strong>$resposta anos</strong> em $ano!";
        ?>
    </section>
</body>
</html>