<?php
/* $name = "Zaki";
$age = 20; */
//echo ('Name is : ' . $name . '  age is ' . $age);


$a = 20; //int
$b = 40.5; //double
$c = true; //boolean
$d = "Zaki"; //string
$e = null;

gettype($e); //get type
// echo (gettype($e));

// echo($a + $b);

//Array
// Index array

$stds = array('hamza', 'shehran', 70);

// print_r($stds[0]);
// var_dump($stds);

// echo $stds[0];

$cities = ["karachi",  'lahore', ',multan'];

// var_dump($cities);

// Assocative array

$std1 = array(
    "name" => "affan",
    "age" => 20,
    "address" => "abc town def"
);

$std2 = [
    "name" => "zaki",
    "age" => 19,
    "address" => "def town abc"
];

// print_r($std2);

$students = [
    "std1" => ["zaki", "hamza", "usama"],
    "std2" => ["mudassir", "suleman", "affan"],
];

// print_r($students);


// $students = [
//     "std1" => ["zaki", "hamza", [1, 2, 3]],
//     "std2" => ["mudassir", "suleman", "affan"],
// ];

// print_r($students['std1'][2][2]);



$myname = "affan";


// echo(strlen($myname));
// echo(ucwords($myname));
// echo(str_word_count($myname));
// echo(strrev($myname));
// echo (strpos($myname, 'n'));
// $newname  = str_replace('n', 'a', $myname);

// echo $newname;

echo $myname[2];
