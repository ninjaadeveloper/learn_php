<?php
include "config.php";


$myname  = $_POST['username'];
$myemail  = $_POST['useremail'];
$myage  = $_POST['userage'];



$query = "INSERT INTO tbl_user (`name`,`email`,`age`) VALUES ('$myname','$myemail',$myage)";

$res  = mysqli_query($con, $query);

if ($res) {
    echo true;
} else {
    echo false;
}
