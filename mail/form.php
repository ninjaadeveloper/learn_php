<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="username">Name : </label>
        <input type="text" name="username" required> <br>

        <label for="email">Email : </label>
        <input type="email" name="email" required><br>


        <label for="subject">Subject : </label>
        <input type="text" name="subject" required><br>

        <label for="message">Message : </label>
        <textarea name="message" col="5" rows="3" required></textarea><br>

        <input type="submit" name="send">
    </form>

</body>

<?php
if (isset($_POST['send'])) {

    @$to = $_POST['email'];
    @$subject = $_POST['subject'];

    @$message = $_POST['message'];

    $header = "muhammadrizwantahir23@gmail.com";

    $res = mail($to, $subject, $message, $header);

    if ($res) {
        echo "mail sent";
    } else {
        echo "mail not sent";
    }
}

?>

</html>