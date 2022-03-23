<?php
function sum($a,$b){
    return $a+$b;
}

function getPrimeNumbers($n){
    $primes = [];
    for($i=2;$i<=$n;$i++){
        $isPrime = true;
        for($j=2;$j<$i;$j++){
            if($i%$j==0){
                $isPrime = false;
                break;
            }
        }
        if($isPrime){
            $primes[] = $i;
        }
    }
    return $primes;
}



function printArray($arr){
    foreach($arr as $item){
        echo $item . " | ";
    }
    echo "<br>";
}

function sumArr($arr){
    $sum = 0;
    foreach($arr as $item){
        $sum += $item;
    }
    return $sum;
}

function averageArr($arr){
    $sum = sumArr($arr);
    $average = $sum/count($arr);
    return $average;
}

