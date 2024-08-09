<?php

// print_r($_GET);
// print_r($_POST);
// print_r($_SERVER);
// echo $_SERVER['REQUEST_METHOD'];

// echo "Name is : " . $_GET['name'] . " & age is " . $_GET['age'];
// echo "Name is : " . $_POST['name'] . " & age is " . $_POST['age'];

// echo '<pre>';

echo "Student name is " . $_POST['name'] .
    " <br>age is " . $_POST['age'] .
    " <br>gender is " . $_POST['gender'] .
    " <br>and intrested in learning " . $_POST['course'][0] . ' , '. $_POST['course'][1];


// echo '<pre>';
