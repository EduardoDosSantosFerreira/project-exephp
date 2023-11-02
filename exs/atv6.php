<!DOCTYPE html>
<html>
<head>
    		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
</head>
<body>
    <h1>Cálculo do Índice de Massa Corporal (IMC)</h1>
    
    <form action="" method="POST">
        Peso (kg): <input type="number" step="0.01" name="peso" required><br>
        Altura (metros): <input type="number" step="0.01" name="altura" required><br>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    // Verifica se peso e altura foram enviados através do formulário
    if (isset($_POST['peso']) && isset($_POST['altura'])) {
        // Obtém os valores do formulário
        $peso = floatval($_POST['peso']);
        $altura = floatval($_POST['altura']);
        
        // Calcula o IMC
        $imc = $peso / ($altura * $altura);
        
        // Exibe o resultado do IMC
        echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";
        
        // Exibe a classificação do IMC
        if ($imc < 18.5) {
            echo "<p>Abaixo do peso</p>";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "<p>Peso normal</p>";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "<p>Acima do peso</p>";
        } else {
            echo "<p>Obeso</p>";
        }
    }
    ?>
</body>
</html>
