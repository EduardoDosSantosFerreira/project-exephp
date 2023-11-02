<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Vendas</title>
</head>
<body>
    <h1>Calculadora de Vendas</h1>
    
    <form action="" method="POST">
        Preço do produto: <input type="number" name="preco" step="0.01" required><br>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    // Verifica se o preço foi enviado através do formulário
    if (isset($_POST['preco'])) {
        // Obtém o valor do preço do formulário
        $preco = floatval($_POST['preco']);
        
        // Calcula o valor com 10% de desconto para pagamento à vista
        $descontoVista = $preco * 0.1;
        $valorVista = $preco - $descontoVista;
        
        // Calcula o valor da prestação para parcelamento sem juros em 5x
        $valorParcelaSemJuros = $preco / 5;
        
        // Calcula o valor da prestação para parcelamento com juros em 1x
        $acrescimoJuros = $preco * 0.2;
        $valorParcelaComJuros = ($preco + $acrescimoJuros) / 1;
        
        // Exibe os resultados
        echo "<p>Valor com 10% de desconto à vista: R$ " . number_format($valorVista, 2, ',', '.') . "</p>";
        echo "<p>Valor da prestação em 5x sem juros: R$ " . number_format($valorParcelaSemJuros, 2, ',', '.') . "</p>";
        echo "<p>Valor da prestação em 1x com juros: R$ " . number_format($valorParcelaComJuros, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>