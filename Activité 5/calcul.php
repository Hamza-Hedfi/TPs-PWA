<?php
$nbre = 4;
$somme = 0;
$chaine_resultat = "La somme de";
echo "<strong>Using for loop</strong>";
echo "<hr>";
echo "<br>";

for ($i = 1; $i <= $nbre; $i++)
{
    $chaine_resultat .= ' + ' .$i;
    $somme += $i;
}

$chaine_resultat = preg_replace('/\+/', '', $chaine_resultat, 1);
$chaine_resultat .= " = " . $somme;
echo $chaine_resultat;

echo "<ul>";
for ($i = 1; $i <= $nbre; $i++)
{
    echo "<li> $i <sup>2</sup> = " . pow($i, 2) . "</li>";
}
echo "</ul>";
