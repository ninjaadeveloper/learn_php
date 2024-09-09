


<?php


$to = "chouhdryrizwan786@gmail.com";
$subject = "Testing";

$message = "<h1>Email:</h1>
<p style='background-color:red;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum eos aliquid consequuntur, praesentium eaque vitae voluptate animi inventore non, odio, consequatur dicta neque corrupti beatae accusamus ullam mollitia voluptatum nulla?</p>";

$header = "muhammadrizwantahir23@gmail.com";
$header .= "MIME-Version:1.0 \r\n";
$header .= "Content-Type: text/html; charset=UTF-8 \r\n";

$res = mail($to, $subject, $message, $header);

if ($res) {
    echo "mail sent";
} else {
    echo "mail not sent";
}


?>