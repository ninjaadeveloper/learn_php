<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<?php 
session_start();

$_SESSION['username'] = "hamza";
$_SESSION['password'] = 1234;

// session_unset();

?>
<body>
    <h1>Session</h1>
    <h2>Username is <?php echo $_SESSION['username']; ?></h2>
</body>
</html>