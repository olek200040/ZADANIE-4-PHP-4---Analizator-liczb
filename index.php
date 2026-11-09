<?php
$suma_wszystkich = 0;
$suma_parzystych = 0;
$suma_nieparzystych = 0;
$ile_podzielnych_przez_3 = 0;

for ($i = 1; $i <= 100; $i++) {
    $suma_wszystkich += $i;
    
    if ($i % 2 == 0) {
        $typ = "parzysta";
        $suma_parzystych += $i;
    } else {
        $typ = "nieparzysta";
        $suma_nieparzystych += $i;
    }
    
    if ($i % 3 == 0) {
        $typ .= ", podzielna przez 3";
        $ile_podzielnych_przez_3++;
    }
    
    echo $i . " - " . $typ . "<br>";
}

echo "<br><b>Podsumowanie:</b><br>";
echo "Suma wszystkich liczb: " . $suma_wszystkich . "<br>";
echo "Suma liczb parzystych: " . $suma_parzystych . "<br>";
echo "Suma liczb nieparzystych: " . $suma_nieparzystych . "<br>";
echo "Liczb podzielnych przez 3: " . $ile_podzielnych_przez_3 . "<br>";
?>
