<?php
/*
Un conto corrente ha un saldo iniziale di €10.000. Ogni anno viene applicato un interesse fisso del 5% al saldo totale; 
per cui il primo anno si avrà un guadagno di €500 (il 5% di 10.000), il secondo anno si avrà un guadagno di €525 (il 5% di 10.500) e così via.
Scrivere un programma in php che calcoli in numero di anni necessari per raggiungere la somma di € 40.000.
*/

$saldo = 10000;
$interesse = 5;
$anni = 0;
$limite = 40000;

while ($saldo < $limite) {
    $saldo += ($saldo * $interesse) / 100;
    $anni++;
}

echo "Per raggiungere € $limite ci vogliono $anni anni.";

?>