<?php
echo "<strong>Using while loop</strong>";
echo "<hr>";
echo "<br>";

$i = 1;
$somme = 0;
$nbre = 4;

$chaine_resultat = "La somme de";

while ($i <= $nbre)
{
    $chaine_resultat .= ' + ' .$i;
    $somme += $i;
    $i++;
}

$chaine_resultat = preg_replace('/\+/', '', $chaine_resultat, 1);
$chaine_resultat .= " = " . $somme;
echo $chaine_resultat;

echo "<ul>";
$i = 1;
while ($i <= $nbre)
{
    echo "<li> $i <sup>2</sup> = " . pow($i, 2) . "</li>";
    $i++;
}