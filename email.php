<?php
require "ligacao.php";
//if(isset($_POST['send'])) {
   // Prepare the email



$to      = 'mariana_henriquescm@outlook.com';
$subject = $_POST['message'];
$message = 'hello';
$headers = 'From: webmaster@example.com';

mail($to, $subject, $message, $headers);
?> 
