<?php
$to = "rohitindi45@gmail.com";
$Subject = "Email From My Website";

$name = $_POST['name'];
$email = $_POST['email'];
$contact_No = $_POST['contact'];
$message = $_POST['message'];

$headers ="From: $email";

mail($to, $Subject,$message,$headers);

echo "Email Has Been Sent! Thank You $name";
