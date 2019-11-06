<?php
$naissances = 2.7;
$deces = 1.9;
$variationS =$naissances - $deces;
echo "Variation par seconde : " . $variationS . PHP_EOL;
$variationM = $variationS * 60;
echo "Variation par minute : " . $variationM . PHP_EOL;
$variationH = $variationM * 60;
echo "Variation par heure: " . $variationH . PHP_EOL;
$variationJ = $variationH * 24;
echo "Variation par jour: " . $variationJ . PHP_EOL;
$variationAN = $variationJ * 365;
echo "Variation par an: " . $variationAN . PHP_EOL;


