<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $dinheiro = $_GET['dinheiro'] ?? '0';
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <!-- Formulário -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dinheiro">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="dinheiro" id="dinheiro" step="5" required value="<?=$dinheiro?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>

        <!-- Cálculos -->
        <?php 
            // Notas de 100
            $notas100 = floor($dinheiro / 100);
            $resto100 = $dinheiro % 100;

            // Notas de 50
            $notas50 = floor($resto100 / 50);
            $resto50 = $resto100 % 50;
        
            // Notas de 10
            $notas10 = floor($resto50 / 10);
            $resto10 = $resto50 % 10;

            // Notas de 5
            $notas5 = floor($resto10 / 5);
            $resto5 = $resto10 % 5;
        ?>

        <section>
            <h2>Saque de R$<?=number_format($dinheiro, 2, ",",".")?> realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img src="imagens/nota-100.jpeg" alt="Nota de 100" class="nota"> x<?=$notas100?></li>
                <li><img src="imagens/nota-50.jpeg" alt="Nota de 50" class="nota"> x<?=$notas50?></li>
                <li><img src="imagens/nota-10.jpeg" alt="Nota de 10" class="nota"> x<?=$notas10?></li>
                <li><img src="imagens/nota-5.jpeg" alt="Nota de 5" class="nota"> x<?=$notas5?></li>
            </ul>
        </section>
    </main>
</body>
</html>