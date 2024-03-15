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

            $dividend = $_GET["divid"];
            $divisor = $_GET["div"];  
            
            echo "<p> O Valor é:" . intdiv($dividend, $divisor);           
        ?>
        <br>
        <br>
            <a href="http://localhost/atividadeAv1/">voltar</a>
    </div>
</body>
</html>