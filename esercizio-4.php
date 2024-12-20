<?php
/*
Scrivere una funzione in php che esegua la conversione da km/h a m/s, e una funzione che compia l’operazione inversa 
*/

function kmh_to_ms($kmh) {
    return $kmh / 3.6;
}

function ms_to_kmh($ms) {
    return $ms * 3.6;
}

?>