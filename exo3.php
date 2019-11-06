<?php
echo "Ce programme permet de determiner votre age". PHP_EOL;

echo "jour de naissance :";
$jour = trim(fgets(STDIN));

echo "mois de naissance:";
$mois = trim(fgets(STDIN));

echo "annee de naissance:";
$annee = trim(fgets(STDIN));

if ($jour > 31 || $mois > 12 || $annee > 2019) {
    echo "votre saisi est incorrect". PHP_EOL;
}  

if ($jour>4 || $mois>10){
    $age = (2019-$annee)+1 ;
}
else {
    $age = 2019 ;

}
echo "votre age est:";
echo $age . PHP_EOL;



