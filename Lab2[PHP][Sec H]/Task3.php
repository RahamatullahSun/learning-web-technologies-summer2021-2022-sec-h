<?php

    function oddEven($number){
        if($number%2==0){
            echo "The number ".$number." is even";
        }else{
            echo "The number ".$number." is odd";
        }
    }

    oddEven(6);

?>