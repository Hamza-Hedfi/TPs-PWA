<?php require 'fonction.php'; ?>
<?php
//var_dump($_REQUEST);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activité 8</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <p>
        <label for="valeur1">Valeur 1: </label>
        <input type="number" name="valeur1" id="valeur1">
    </p>
    <p>
        <label for="valeur2">Valeur 2: </label>
        <input type="number" name="valeur2" id="valeur2">
    </p>
    <p>
        <label for="resultat">Résultat: </label>
        <input type="number" name="resultat" id="resultat" disabled value="<?php afficherResultat(); ?>">
    </p>
    <p>
        <button type="submit">Calculer</button>
    </p>
</form>
</body>
</html>
<!---->
<?php
function afficherResultat()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo somme($_POST['valeur1'], $_POST['valeur2']);
    }
}
?>
