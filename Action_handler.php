<?php

$First_Name = $_POST('First_Name');
$Last_Name = $_POST('Last_Name');
$Email_Address  = $_POST('Email_Address');
$message = $_POST('message');
$to = "sahagunwa@gmail.com"
$subject = "See Message"


echo "<p>Thanks for reaching out $First_Name ...</p>";
echo "<p> We will reply to $Email_Address</p>"
?>
