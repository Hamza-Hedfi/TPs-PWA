<?php


$age = 40;
$sexe = 'F';


echo "<p><strong>Résultat du test avec age = $age et sexe = $sexe</strong></p>";
echo
(($age >= 21 && $age <= 40) && ($sexe == 'F')) ? 'Bonjour Madame, vous avez entre 21 et 40 ans.' : 'Désolé, vous ne remplissez pas les conditions.';

echo "<hr>";

$age = 40;
$sexe = 'H';

echo "<p><strong>Résultat du test avec age = $age et sexe = $sexe</strong></p>";
echo
(($age >= 21 && $age <= 40) && ($sexe == 'F')) ? 'Bonjour Madame, vous avez entre 21 et 40 ans.' : 'Désolé, vous ne remplissez pas les conditions.';