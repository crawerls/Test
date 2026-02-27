<?php

//variabili

$dato1 = 5;
$dato2 = 10;
$dato3 = 15;
$dato4 = 20;

//usa la matematica per determinare se è pari o dispari (% 2  == 0 è pari, altrimenti è dispari)
if ($dato1 % 2 == 0) {
    echo "Il numero $dato1 è pari";
} else {
    echo "Il numero $dato1 è dispari";
}

echo "<br>"; // Aggiunge una nuova riga per migliorare la leggibilità dell'output

if ($dato2 % 2 == 0) {
    echo "Il numero $dato2 è pari";
} else {
    echo "Il numero $dato2 è dispari";  
}

echo "<br>"; 

if ($dato3 % 2 == 0) {
    echo "Il numero $dato3 è pari";
} else {
    echo "Il numero $dato3 è dispari";
}
echo "<br>";

if ($dato4 % 2 == 0) {
    echo "Il numero $dato4 è pari";
} else {
    echo "Il numero $dato4 è dispari";
}
?>