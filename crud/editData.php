<?php
include 'config.php';


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

// echo $id;
// echo "<br>";

// echo $name;
// echo "<br>";

// echo $email;
// echo "<br>";


$query = "UPDATE tbl_user SET `name`='$name' , `email`='$email' WHERE id='$id' ";

$result = mysqli_query($con,$query);


if ($result) {
    echo '<script>alert("User updated sucessfully")</script>';
    echo '<script>window.location = "http://localhost/learn_php/crud/index.php";</script>';
    
} else {
    echo '<script>alert("Error")</script>';
}
