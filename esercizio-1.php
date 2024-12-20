<?php
/*
 Una palestra offre delle offerte per degli abbonamenti che possono essere mensili o trimestrali. I prezzi sono i seguenti:
mensile: € 35
trimestrale: € 95
Vengono inoltre applicati degli sconti in base all’età dell’iscritto. 
Viene applicato uno sconto del 25% ai minori di 16 anni, e uno sconto del 30% per le persone oltre i 60 anni.
Scrivere un proramma php che implementi la logica necessaria per calcolare il prezzo dell’abbonamento 
in base alla tipologia di abbonamento scelto e l’età dell’abbonato.
*/

$eta = rand(10, 80);
if (rand(0,1) == 0) {
    $abbonamento = 'mensile';
} else {
    $abbonamento = 'trimestrale';
}
$prezzo = 0;

if ($abbonamento == 'mensile') {
    $prezzo = 35;
} elseif ($abbonamento == 'trimestrale') {
    $prezzo = 95;
}

if ($eta < 16) {
    $prezzo -= ($prezzo * 25) / 100;
} elseif ($eta > 60) {
    $prezzo -= ($prezzo * 30) / 100;
}

echo "L' abbonamento $abbonamento, per l'abbonato di anni $eta è di € $prezzo.";

?>