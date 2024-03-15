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
            $cat1 = $_GET["cat1"];
            $cat2 = $_GET["cat2"];
            echo "<p> O Valor da Hipotenusa é: " . hypot($cat1, $cat2);
        ?>
    <br>
    <br>
        <a href="http://localhost/atividadeAv1//">voltar</a>
    </div>
</body>
</html>