<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "hamza.koc@georgebrown.ca";
$subject = "Message from GBC profile page";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Hello there ! I receive your email. I will reach you soon.
";

?>

