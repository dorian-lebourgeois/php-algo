<?php
// 9ans 10mois 4JOURS + 2%par ans
$annee = 2010;
$compte = 0;
while ($annee <= 2019){
    $compte = $compte + 1200;
    $compte = $compte * 1.02;
    $annee++;
 
}
echo "le solde est actuellement de $compte euros" . PHP_EOL;





