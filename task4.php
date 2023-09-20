<?php
function fibonacci($number){
        if($number == 0)
            return $number;
        elseif($number == 1)
            return $number;
        else
            return fibonacci($number-1)+fibonacci($number-2);
    }

    
function print_fibonacci($n){
    for($i=0;$i<$n;$i++){
        $result_f = fibonacci($i);
        echo "$result_f ";
    }
}

print_fibonacci(15);