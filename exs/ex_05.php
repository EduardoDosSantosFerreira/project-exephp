<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Número</title>
</head>
<body>
    <h1>Análise de Número</h1>
    
    <form action="" method="POST">
        Insira um número: <input type="number" name="numero" required>
        <input type="submit" value="Analisar">
    </form>
    
    <?php
    // Verifica se um número foi enviado 
    if (isset($_POST['numero'])) {
        // Obtém o valor do número  
        $numero = intval($_POST['numero']);
        
        // Verifica se o número é par ou ímpar
        $parOuImpar = ($numero % 2 == 0) ? 'par' : 'ímpar';
        
        // Verifica se o número é positivo, negativo ou zero
        $positivoOuNegativo = ($numero > 0) ? 'positivo' : ($numero < 0 ? 'negativo' : 'zero');
        
        // Calcula o sucessor e antecessor
        $sucessor = $numero + 1;
        $antecessor = $numero - 1;
        
        // Exibe os resultados
        echo "<p>O número $numero é $parOuImpar, $positivoOuNegativo.</p>";
        echo "<p>O sucessor de $numero é $sucessor e o antecessor é $antecessor.</p>";
    }
    ?>
</body>
</html>
