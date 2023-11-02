<!DOCTYPE html>
<html>
<head>
    		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores Intermediários</title>
</head>
<body>
    <h1>Valores Intermediários</h1>
    
    <form action="" method="POST">
        Primeiro Valor: <input type="number" name="valor1" required><br>
        Segundo Valor: <input type="number" name="valor2" required><br>
        <input type="submit" value="Imprimir">
    </form>
    
    <?php
    // Verifica se os valores foram enviados através do formulário
    if (isset($_POST['valor1']) && isset($_POST['valor2'])) {
        // Obtém os valores do formulário
        $valor1 = intval($_POST['valor1']);
        $valor2 = intval($_POST['valor2']);
        
        // Calcula e armazena os valores intermediários
        $valoresIntermediarios = "";
        for ($i = $valor1 + 1; $i < $valor2; $i++) {
            $valoresIntermediarios .= "$i ";
        }
        
        // Exibe o resultado na tela
        echo "<p>Valores intermediários: $valoresIntermediarios</p>";
    }
    ?>
</body>
</html>
