<?php

//variabili Nomi

 $nomi = ["mario", "giuseppe", "lucio", "maria"];
 $i = 0;
 
//stampare tutti i nomi a schermo
//count() è una funzione che conta quanti elementi ci sono in un array e in più per la funziona while si deve creare la funzione $i 
// che è uguale 0, in questo modo si può stampare a schermo tutti i nomi presenti nell'array $nomi, se non si crea la funzione $i, 
// il ciclo while non funzionerà e stamperà solo il primo nome dell'array e per incrementare si deve usare $i++ che è uguale a $i = $i + 1, in questo modo si incrementa la funzione $i di 1 ogni volta che il ciclo while viene eseguito,

while ($i < count($nomi)){
    echo "Ecco il Nome: " . $nomi[$i] . "<br>";
    $i++;

}

 ?>