<?php

$n = 10;

function Fibonachi($n)
{
    $Sum = 0;
    $a = array();
    $a [0] = 0;
    $a [1] = 1;
    if ($n == 1) 
    {
        $Sum = $a [0] = 0;
    } elseif ($n == 2) 
    {
        $Sum = $a [0] + $a [1];;
    } else {
        for ($i = 2; $i < $n; $i++)
        {
            // $a[2] = $a[2-1] + $a[2-2];
            // $a[2] = $a[1] + $a[0];
            $a[$i] = $a[$i-1] + $a[$i-2];
            $Sum = $Sum + $a[$i];
        }
    }
    echo "Fibonachi sequence: ";
    for ($i = 0; $i < $n; $i++)
    {
        echo $a[$i] . ", ";
    }
    echo PHP_EOL;
    echo "Fibonachi Sum: " . $Sum . PHP_EOL;
}

Fibonachi ($n);