<?php
/*
 Scrivi un programma php che calcoli la somma dei numeri primi da 2 fino ad un numero inserito da utente.
*/

function isPrime($n) {
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i < (int)sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$numeroUtente = rand(2, 1000);

$somma = 0;
for ($i = 2; $i <= $numeroUtente; $i++) {
    if (isPrime($i)) {
        $somma += $i;
    }
}

echo "La somma dei numeri primi da 2 a $numeroUtente è $somma."

?>