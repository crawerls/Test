<?php
//variabili

$punteggio = 0;
$i = 10;


//cambiando anche l'ordine delle variabili, il ciclo while funziona lo stesso, 

while ($punteggio <= $i) {
    echo  "il punteggio è : " . $punteggio . "<br>";
    $punteggio++;
}

//ciclo while cambiando l'ordine mettedono prima l'incremento e poi la variabile.

while ($i >= $punteggio) {
    echo  "il punteggio è : " . $punteggio . "<br>";
    $punteggio++;
}

?>