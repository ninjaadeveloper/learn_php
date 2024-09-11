<?php

include "config.php";
$query = "SELECT * from tbl_user";

$res = mysqli_query($con, $query);

// print_r($res);

$mydata = [];
while ($row = mysqli_fetch_assoc($res)) {
    // echo $row['name'];
    $mydata[] = [
        'username' => $row['name'],
        'useremail' => $row['email'],
        'userage' => $row['age']
    ];
};

echo json_encode($mydata);


// print_r();

