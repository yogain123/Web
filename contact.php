<?php

if(isset($_POST["submit"])) {
    $recipient="yogendrasaxena56@gmail.com";
    $subject="Form to email message";
    $name=$_POST["userName"];
    $email=$_POST["userEmail"];
    $phone = $_POST["userPhone"];
    $message=$_POST["userMsg"];

    $mailBody="Name: $name\nEmail: $email\n\n$message";

    if(mail($recipient, $subject, $mailBody, "From: $name <$email>"))
    	echo "Thank you! Your message has been sent";
    else
    	echo "message send failed";
}

?>