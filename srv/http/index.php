<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula</title>
</head>
<body>
    <h1>Meu primeiro PHP<h1>
        <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo"ola mundo. \u{1F30D} <br>";
        echo date ("d/M/Y"); 
        echo"<br>";
        echo date ("g/i");
        ?>
</body>
</html>