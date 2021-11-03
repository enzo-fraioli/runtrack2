<?php

    for($p = 1; $p <= 99; $p++){

        if($p % 15 == 0){
            echo "FizzBuzz<br>";
        }

        else if($p % 5 == 0){
            echo "Buzz<br>";
        }

        else if($p % 3 == 0){
            echo "Fizz<br>";
        }

        else{
            echo "$p<br>";
        }
    }
?>