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

                $base = $_POST['base'];
                $exponent = $_POST['exponent'];

                $result = pow($base, $exponent);

                echo "<p>O resultado de $base elevado à potência de $exponent é: $result</p>";
            }
        ?>
    <br>
    <br>
        <a href="http://localhost/atividadeAv1//">voltar</a>
    </div>
</body>
</html>