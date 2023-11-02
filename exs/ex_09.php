<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Strings</title>
</head>
<body>
    <h1>Verificação de Strings</h1>
    
    <form action="" method="POST">
        String 1: <input type="text" name="string1" required><br>
        String 2: <input type="text" name="string2" required><br>
        <input type="submit" value="Verificar">
    </form>
    
    <?php
    // Verifica se as strings foram enviadas
    if (isset($_POST['string1']) && isset($_POST['string2'])) {
        // Obtém os valores das strings
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];
        
        // Verifica se as strings são iguais ou diferentes
        $resultado = ($string1 == $string2) ? 'IGUAL' : 'DIFERENTE';
        
        // Exibe o resultado
        echo "<p>As strings são $resultado.</p>";
    }
    ?>
</body>
</html>
