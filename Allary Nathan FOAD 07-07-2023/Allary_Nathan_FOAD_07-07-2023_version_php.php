<?php
$nombreproduit = 0;
$nombreproduitmin = 1;
$listesum10 = 0;
$listesum5 = 0;
$listeprix = array();
$nombreproduit = readline("saisissez le nombre de produit : ") . "\n";
while ($nombreproduitmin <= $nombreproduit){
    $prixproduit = readline("saisissez le prix du produit " . $p . " : ") . "\n";
    array_push($listeprix, $prixproduit);
    $nombreproduitmin++;
}
$listesum =  array_sum($listeprix);
Echo "vous devez payer " . $listesum . " Euro " . "\n";
while ($listesum >= 10){
    $listesum10++;
    $listesum = $listesum - 10;
}
while ($listesum >= 5){
    $listesum5++;
    $listesum = $listesum - 5;
}
echo "vous donner " . $listesum10 . " foix 10 euro, " . $listesum5 . " foix 5 euro et " . $listesum . " foix 1 euro";