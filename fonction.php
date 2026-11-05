<?php
declare(strict_types=1);

function calculerCoutAnnuel(float $coutMensuel): float
{
    return $coutMensuel * 12;
}
$coutServeur = calculerCoutAnnuel(24.90);
echo "Coût annuel : " . $coutServeur . " euros ";

function calculerTauxOccupation(float $espaceUtilise, float $capacite): float
{
    if ($capacite <= 0){
        return 0;
        }
    else{
        return $espaceUtilise / $capacite * 100;
}
}
$occupation = calculerTauxOccupation(360,500);
echo "<p> Espace utilisé : " .$occupation . "%";


function estChargeCritique(float $chargeCpu): bool
{
    if ($chargeCpu >= 90){
        return TRUE;
    }
    else{
        return FALSE;
    }
}

echo estChargeCritique(90);