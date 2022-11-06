<?php

$input = readline("Enter any integer for Fizz Buzz : ");

$result = new FizzBuzz();
$result->fizzyBuzz($input);


class FizzBuzz {
    public function fizzyBuzz(string $input) {
        $is11th = 0;
        for ($i = 1; $i <= $input; $i++ && $is11th++) {
            if ($is11th==20) {
                echo PHP_EOL;
                $is11th=0;
            }
            if (!($i % 3) && !($i % 5)) {
                echo "FizzBuzz ";
            }
            elseif (!($i % 3)) {
                echo "Fizz ";
            }
            elseif (!($i % 5)) {
                echo "Buzz ";
            }
            else {
                echo "$i" . " ";
            }
        }
    }
}
