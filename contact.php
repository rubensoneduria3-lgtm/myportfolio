<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to="your@email.com";
$subject="New Message from GRAPHICSWEB";
$body="Name: $name\nEmail: $email\nMessage: $message";
$headers="From: $email";

if(mail($to,$subject,$body,$headers)){
 echo "Message sent successfully!";
}else{
 echo "Failed to send message.";
}
}
?>