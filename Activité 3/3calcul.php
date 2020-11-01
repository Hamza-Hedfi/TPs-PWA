<?php
$TVA = 0.18;
$Prix = 15.2;
$Nombre = 10;

$PrixHT = $Nombre * $Prix;
$PrixTTC = $PrixHT * $TVA + $PrixHT;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activité 3</title>
    <style>
        div {
            font-weight: bold;
            margin: 0 auto;
            width: fit-content;
            height: fit-content;
        }
    </style>
</head>
<body>
<div>
    <p>Prix HT = <?php echo $PrixHT ?></p>
    <p>Prix TTC = <?php echo $PrixTTC ?></p>
    <p>Type de Nombre = <?php echo gettype($Nombre) ?></p>
    <p>Prix HT = <?php echo gettype($PrixHT) ?></p>
</div>
</body>
</html>