<?php
$personnes = [
    'Directeur' =>
        [
            'prenom' => 'Mohamed',
            'nom' => 'Ali',
            'age' => 55,
            'ville' => 'Tunis'
        ],
    'Financier' =>
        [
            'prenom' => 'Fahmi',
            'nom' => 'Kadhi',
            'age' => 52,
            'ville' => 'Sousse'
        ],
    'Comptable' =>
        [
            'prenom' => 'Halima',
            'nom' => 'Ben Ahmed',
            'age' => 38,
            'ville' => 'Kef'
        ],
    'Informaticien' =>
        [
            'prenom' => 'Ahmed',
            'nom' => 'El Kefi',
            'age' => 33,
            'ville' => 'Gabes'
        ],
    'Chauffeur' =>
        [
            'prenom' => 'Halim',
            'nom' => 'Ben Slama',
            'age' => 27,
            'ville' => 'Beha'
        ]
];
/**
 * @param array $personnes
 */
function afficherTout(array $personnes, string $ville): void
{
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>";
    echo "Prénom";
    echo "</th>";
    echo "<th>";
    echo "Nom";
    echo "</th>";
    echo "<th>";
    echo "Age";
    echo "</th>";
    echo "<th>";
    echo "Ville";
    echo "</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($personnes as $p) {
        if ($p['ville'] == $ville) {
            echo "<tr>";
            echo "<td>";
            echo $p['prenom'];
            echo "</td>";
            echo "<td>";
            echo $p['nom'];
            echo "</td>";
            echo "<td>";
            echo $p['age'];
            echo "</td>";
            echo "<td>";
            echo $p['ville'];
            echo "</td>";
            echo "</tr>";
        }
    }
    echo "</tbody>";
    echo "</table>";
}

afficherTout($personnes, 'Tunis');