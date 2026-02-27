<?php

//variabili lista della spesa

$lista_spesa = [ "vino" , "galette_integrali" , "latte" , "pacchetto_magic"];


//ho usato un foreach per scorrere tutti i prodotti della lsita della spesa, e se il prodotto è latte,
//  allora stampo a schermo "prendi quello scremato" altrimenti stampo a schermo "prendi: " e il nome del prodotto.

foreach ($lista_spesa as $prodotto){
    if ($prodotto == "latte"){

        echo "Prendi: " . $prodotto ;
    
        echo "---> Prendi quello scremato! " . "<br>";
    }
    else{
        echo "Prendi: " . $prodotto . "<br>";
    }
}

?>