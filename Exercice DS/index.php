<!--
Exercie 1
1- B C
2- A B
3- D
4- A D
5- A
6- A B
7- B
8- C
9- C
10- A
11- A
12- D
13- A
14- B
15- C

Exercice 2
1- 0
2- str_replace
3- in_array array_key_exists isset
-->

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 3 DS 2019/2020</title>
</head>
<body>

<form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
    <p>
        <label for="val1">Choisissez votre multiplicande (val1): </label>
        <select name="val1" id="val1">
            <?php
            for ($i = 0; $i <= 20; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
    </p>
    <p>
        <label for="val2">Choisissez votre multiplicande (val2): </label>
        <select name="val2" id="val2">
            <?php
            for ($i = 10; $i <= 20; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
    </p>
    <button type="submit">Afficher la table choisie</button>
</form>

<?php
$val1 = isset($_REQUEST['val1']) ? $_REQUEST['val1'] : 0;
$val2 = isset($_REQUEST['val2']) ? $_REQUEST['val2'] : 0;
for ($i = 0; $i <= $val2; $i++) {
    echo "<p> $val1 * $i = " . ($val1 * $i) . "</p>";
}
?>

</body>
</html>
