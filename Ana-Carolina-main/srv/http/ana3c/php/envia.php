<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Envia</title>
</head>
<body>
        <?php
        $nome = $_GET ["nome"];
        $idade = $_GET ["idade"];

        echo "<p>$nome $idade</p>";
        ?>
</body>
</html>