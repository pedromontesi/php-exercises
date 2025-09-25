<?php

    function sum($num1, $num2){
        return $num1 + $num2;
        
    }

    function area($base, $altura){
       ($base * $altura) / 2;

    }

    function getLastItem(array $arr){
        return end($arr);
    
    }


   function check(array $arr, $num){
    return in_array($num, $arr, true);
}

    function animals($numGalinhas, $numVacas, $numPorcos){
        /* A resolução deve ser realizada aqui */
        return;
    }

    function smallNumber($num1, $num2){
        /* A resolução deve ser realizada aqui */
        return;
    }

    function findSmallestNumber(array $arr){
         return min($arr);
        
    }

   function missNumber(array $arr){
    $tenNumbers = range(1, 10); 
    $missing = array_diff($tenNumbers, $arr);

    return array_values($missing); 
}

   function isChristmas(DateTime $date){
    if ($date->format('d') === '25' && $date->format('m') === '12') {
        echo "ho ho ho merry christmas";
    } else {
        echo "its not christmas";
    }
}

    function isValidEmail($email){
        return;
    }

?>