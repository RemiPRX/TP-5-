<?php

function calculerCout(float $prixUnitaire, int $quantite): float
{
    $prixUnitaire = 10;
    $quantite = 2;
    $prixUnitaire * $quantite;
}

function estDisponible(bool $serveurActif, bool $serviceActif): bool
{
    $disponible = true;
}

$cout = calculerCout(25, 4);
$disponible = estDisponible(true, false);

echo "Coût : " . $cout . "<br>";
var_dump($disponible);
