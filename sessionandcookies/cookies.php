<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<?php 

$name  = 'username';
$value  = 'admin';

$name2  = 'password';
$value2  = 1324;

// setcookie($name,$value, time() + (86400),"/");
setcookie($name,'', time() - (86400),"/");

// setcookie($name2,$value2, time() + (86400),"/");
setcookie($name2,'', time() - (86400),"/");

?>

<body>

    <h1>Cookies</h1>
    <?php 
    echo $_COOKIE['username'];
    ?>


</body>
</html>