<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparação de Números</title>
</head>
<body>
    <h1>Comparação de Números</h1>

    <!--Colhe os números digitados pelo usuário !-->
    <form action="" method="POST">
        Número 1: <input type="number" name="numero1"><br>
        Número 2: <input type="number" name="numero2"><br>
        Número 3: <input type="number" name="numero3"><br>
        <input type="submit" value="Comparar">
    </form>
    
    <?php
    // Verifica o envio dos valores
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
        // Obtém os valores do formulário
        $numero1 = intval($_POST['numero1']);
        $numero2 = intval($_POST['numero2']);
        $numero3 = intval($_POST['numero3']);
        
        // Encontra o maior 
        $maior = max($numero1, $numero2, $numero3);
        
        // Mostra os números em ordem crescente
        $numeros = [$numero1, $numero2, $numero3];
        sort($numeros);
        echo "Números em ordem crescente: " . implode(", ", $numeros) . "<br>";
        
        // Imprime o maior número
        echo "O maior dentre os valores é: $maior";
    }
    ?>
</body>
</html>
