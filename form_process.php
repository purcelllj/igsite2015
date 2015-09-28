<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "purcelllj@gmail.com"
$subject = "Message from site"

mail ($to, $subject, $message, "From " . $name);

echo "Message Sent";

?>