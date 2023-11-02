<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Dólar para Real</title>
</head>
<body>
    <h1>Conversão de Dólar para Real</h1>
    
    <form action="" method="GET">

        <h2>Dolar Hoje: $ 5,10<br></h2>
        Quantidade de dólares: <input type="text" name="quantidade"><br>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    // Função para formatar um número para reais (R$)
    function formatarValor($valor) {
        return "R$ " . number_format($valor, 2, ',', '.');
    }

    // Verifica se foram enviados valores através do formulário
    if (isset($_GET['quantidade'])) {
        // Variável que recebe a quantiodade me dolares
        $quantidade = floatval($_GET['quantidade']);
        
        // Variável como valor do dólar
        $valorDolarEmReais = 5.10;
        
        // Variável que multiplica a quant pelo valor
        $valorEmReais = $quantidade  * $valorDolarEmReais;
        
        // Exibe o resultado
        echo "<p>$quantidade dólares convertidos em reais: " . formatarValor($valorEmReais) . "</p>";
    }
    ?>
</body>
</html>
