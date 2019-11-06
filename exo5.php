<?php
$v1 = 0;
$v2 = 1;
$fibonacci = 2;
while ($fibonacci <= 50)
{

    $vtemp = $v1 + $v2 ;
    echo $vtemp. ";";
    $v1 = $v2;
    $v2=$vtemp;
    $fibonacci++;
}
