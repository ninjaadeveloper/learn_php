<?php
include 'config.php';


$username = $_POST['name'];
$useremail = $_POST['email'];

// $userimage = $_FILES['image'];

$filename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];
$filetype = $_FILES['image']['type'];
$filesize = $_FILES['image']['size'];

// $randomNumber =  rand(1, 100);
// $newName = $randomNumber . $filename;
// echo $newName;


$fileMove = move_uploaded_file($tempname, "upload/" . $filename);

if ($fileMove) {
    $query = ("INSERT INTO tbl_user (`name`,`email`,`image`) values ('$username','$useremail','$filename')");
    $result = mysqli_query($con, $query);
} else {
    echo "Error in file Uploading";
}


if ($result) {
    echo '<script>alert("User created sucessfully")</script>';
    echo '<script>window.location = "http://localhost/learn_php/crud/index.php";</script>';
} else {
    echo '<script>alert("Error")</script>';
}
