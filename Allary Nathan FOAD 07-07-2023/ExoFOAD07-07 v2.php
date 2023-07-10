<?php
$nombreproduit = 0;
$p = 1;
$q = 0;
$rendue10 = 0;
$rendue5 = 0;
$listeprix = array();
$nombreproduit = readline("saisisser le nombre de produit : ") . "\n";
while ($p <= $nombreproduit){
    $prixproduit = readline("saisisser le prix du produit " . $p . " : ") . "\n";
    array_push($listeprix, $prixproduit);
    $p++;
}
$listesum =  array_sum($listeprix);
Echo "vous devez payer " . $listesum . " Euro " . "\n";
    $eurodonner = readline("inscriver la somme d'argent donner : ") . "\n";
while ($q == 0){
    if ($eurodonner < $listesum){
        echo "vous n'avez pas donner assez d'argent"  . "\n";
        $eurodonner = readline("inscriver la somme d'argent donner : ") . "\n";
    } 
    else if ($eurodonner == $listesum){
        echo "vous avez donner le prix exacte, merci de votre visite";
        break;
    }
    else{
        $rendue = $eurodonner - $listesum;
        while ($rendue >= 10){
            $rendue10++;
            $rendue = $rendue - 10;
        }
        while ($rendue >= 5){
            $rendue5++;
            $rendue = $rendue - 5;
        }
        echo "on vous rend " . $rendue10 . " foix 10 euro, " . $rendue5 . " foix 5 euro et " . $rendue . " foix 1 euro";
        break;
    }
}