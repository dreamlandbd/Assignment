<?php
 function fibonacci($number){
    if($number == 0)
        return $number;
    elseif($number == 1)
        return $number;
    else
        return fibonacci($number-1)+fibonacci($number-2);
}


for($i=0;$i<10;$i++){
    $result_f = fibonacci($i);

    if($result_f > 100)
        break;
    else
        echo "$result_f ";
}