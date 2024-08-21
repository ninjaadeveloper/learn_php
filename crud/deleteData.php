<?php

include 'config.php';

$id = $_GET['userId'];

$query = "DELETE from tbl_user WHERE id =" . $id;
$result = mysqli_query($con, $query);

if ($result) {
    echo '<script>alert("User deleted sucessfully")</script>';
    echo '<script>window.location = "http://localhost/learn_php/crud/index.php";</script>';
    
} else {
    echo '<script>alert("Error")</script>';
}