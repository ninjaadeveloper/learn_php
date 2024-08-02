<?php

function printName($namee)
{
    echo "Hello " . $namee . "<br>";
}

// printName('Affan');
// printName('Zaki');


// function addTwoNumbers($num1, $num2)
// {
//     echo $num1 + $num2;
// }

// addTwoNumbers(20, 50);

function printOnlyString(string $namee)
{
    echo $namee;
}
// printOnlyString('Affan');



function addTwoNumbers($num1, $num2): int
{
    return $num1 + $num2;
}

// echo (addTwoNumbers(50, 20));


$today1 = date("Y/d/m");
// echo $today1;


$currentTimeinSeconds = date("h:i:sa");
// echo $currentTimeinSeconds;


$test = "ABC";


echo isset($test);