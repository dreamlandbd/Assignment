<?php

function printEvenNumbersUsingFor(int $start,int $end){
    for($i = $start;$i <= $end; $i = $i+1){
        if ($i == 0)
            continue;
        elseif($i %2 == 0){
            echo "$i ";
        }
    }
}

printEvenNumbersUsingFor(1,20);

function printEvenNumbersUsingWhile(int $start,int $end){
    $i = $start;
    while($i <= $end){
        if ($i == 0)
            continue;
        elseif($i %2 == 0){
            echo "$i ";
        }
        $i = $i+1;
    }
}

printEvenNumbersUsingWhile(1,20);

function printEvenNumbersUsingDoWhile(int $start,int $end){
    $i = $start;
    
    do{
        if ($i == 0)
            continue;
        elseif($i %2 == 0){
            echo "$i ";
        }
        $i = $i+1;
    }
    while($i <= $end);     
}

printEvenNumbersUsingDoWhile(1,20);