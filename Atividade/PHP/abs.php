<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arquivo php</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
    <?php
  
    $abs = $_GET["abs"];
    echo "<p> o numero real de $abs é: " . abs($abs);
    ?>
    <br>
    <br>
    <a href="http://localhost/atividadeAv1/">voltar</a>
</body>
</html>