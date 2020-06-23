<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$subject = "New Message from onepage personal";

$EmailTo = "useremail@gmail.com"; // Enter your email address here

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $subject, $Body, "From:".$email);

// redirect to success page
if ($success){
   echo "<script>alert ('message sent!!')</script>";
}
?>