<?php
$message = "écrire une année :";
echo $message;
// echo "écrire une année :" . $variationH . PHP_EOL;
$userInpute = trim(fgets(STDIN));

echo "année saisie : $userInpute".PHP_EOL;

// (Multiple de 4) et ((non multiple de 100) ou (multiple de 400))

if(($annee %4 ==0)&& ($annee %100 != 0 || $annee % 400==0)){
    echo "l'année $annee est bissextile" . PHP_EOL;
} else{
    echo "l'annee $annee n'est pas bissextile" .PHP_EOL;

}
 
