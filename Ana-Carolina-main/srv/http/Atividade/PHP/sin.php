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

                $angle = $_POST['angle'];

                $angle_rad = deg2rad($angle);

                $sin_value = sin($angle_rad);

                echo "<p>O seno do ângulo $angle graus é: $sin_value</p>";
            }
        ?>
        <br>
        <br>
        <a href="http://localhost/atividadeAv1//">voltar</a>
    </div>
</body>
</html>