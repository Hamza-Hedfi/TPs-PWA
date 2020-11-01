<?php
$t = [];
for ($i = 1; $i <= 12; $i++) {
    $t[$i] = rand(1, 12);
}

foreach ($t as $key => $s) {
    switch ($s) {
        case 12:
        case 1:
        case 2:
            echo "[" . $key . "] =>" . $s . ": Hiver <br>";
            echo "<br>";
            break;
        case 3:
        case 4:
        case 5:
            echo "[" . $key . "] =>" . $s . ": Printemps <br>";
            echo "<br>";
            break;
        case 6:
        case 7:
        case 8:
            echo "[" . $key . "] =>" . $s . ": Été <br>";
            echo "<br>";
            break;
        case 9:
        case 10:
        case 11:
            echo "[" . $key . "] =>" . $s . ": Automme <br>";
            echo "<br>";
            break;
    }
}