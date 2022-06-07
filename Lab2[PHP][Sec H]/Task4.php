<?php

    function largest($number1,$number2,$number3){
        $max = 0;

        if ($number1 >= $number2 && $number1 >= $number3)
          $max = $number1;
        elseif ($number2 >= $number1 && $number2 >= $number3)
          $max = $number2;
        elseif ($number3 >= $number1 && $number3 >= $number2)
          $max = $number3;
        
        echo "Largest number among $number1, $number2 and $number3 is: $max";
    }

    largest(60,70,30);

?>