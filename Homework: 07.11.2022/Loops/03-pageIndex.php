<?php

$firstInput = (string) readline("Enter the first word: ");
$secondInput = (string) readline("Enter page number: ");

function pageIndex(string $firstInput,int $secondInput):string {
    $dots = "";
    $length = 30 - (strlen($firstInput) + strlen($secondInput));

    for ($i=0;$i<$length;$i++){
        $dots[$i]=".";
    }

    return $firstInput.$dots.$secondInput;
}

$result = pageIndex($firstInput,$secondInput);
echo $result;






