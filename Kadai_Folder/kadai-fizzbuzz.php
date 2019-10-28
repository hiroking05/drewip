<?php
    $max = 100;

    for ($a = 1; $a <= $max; $a++)  {
        $FizzBuzz = FizzBuzz($a);
        print $FizzBuzz.PHP_EOL;
        
    }

    function FizzBuzz($a) {
            if ($a % 5 == 0 && $a % 3 == 0 ) {
                return 'FizzBuzz';
            }  
            elseif ($a % 5 ==0) {
                return 'Buzz';
            }
            elseif  ($a % 3 == 0) {
                return 'Fizz';
            }
            else {
                return $a;
            }
    }
?>