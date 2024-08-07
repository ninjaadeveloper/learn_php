<?php
/*for ($i = 1; $i <= 10; $i++) {
    echo "This is Line no: " . $i . "<br>";
}*/

/*$stds = ["ali", "usama", "asad"];

foreach ($stds as $std) {
    echo $std . "<br>";
}*/

/*$a = 1;
while ($a <= 10) {
    echo "This is line no" . $a . "<br>";
    $a++;
}*/

/*$i = 1;

do {
    echo "This is line no" . $i . "<br>";
    $i++;
} while ($i <= 10);
*/


/*for ($i = 1; $i <= 10; $i++) {
    echo "This is number  : " . $i . "<br>";

    // if($i == 5){
    //     break;
    // }

    if ($i == 7) {
        continue;
    }
} */


/*$std = ["name" => "Asim", "age" => 20, "email" => "abc@gmail.com"];


foreach ($std  as $s => $val) {
    echo $s . " = " . $val . "<br>";
}*/
$name = 'zaki';

/*if ($name == "affan") {
    echo "Hello " . $name;
} else {
    echo "Hello everyone";
} */

/*
if ($name == "affan") {
    echo "Welcome " . $name;
} elseif ($name == "zaki") {
    echo "Welcome " . $name;
} else {
    echo "Hello everyone";
}

*/

/*
$language = "JS";
switch ($language) {
    case "C":
        echo "Your favorite language is C ";
        break;
    case "PHP 8":
        echo "Your favorite language is PHP 8";
        break;
    case "C++":
        echo "Your favorite language is C++";
        break;
    case "JS":
        echo "Your favorite language is JS";
        break;
    default:
        echo "Your favorite language is neither C, PHP 8, nor C++";
}
*/


/*
$num = [10, 9, 5];
echo "before";
print_r($num);
echo "<br>------------- <br>";
echo "after";
sort($num);
print_r($num);



$Student = array("Zaki", "Affan", "Shehran");

sort($Student);
rsort($Student);

var_dump($Student);
*/


$age = array("Ali" => "25", "Zaki" => "19", "Bilal" => "43");

rsort($age);
krsort($age);
// var_dump($age);


// asort($age);
arsort($age);
var_dump($age);
