<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arquivo php</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
    <div class="formula">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $input_values = $_POST['values'];
                
                $array = explode(',', $input_values);
            
                $array = array_map('trim', $array);
                $array = array_map('intval', $array);
                
                $min_value = min($array);
            
                echo "<p>O valor mínimo entre os valores fornecidos é: $min_value</p>";
            }
        ?>
        <br>
        <br>
            <a href="http://localhost/atividadeAv1/">voltar</a>
    </div>
</body>
</html>