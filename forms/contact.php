<?php
if(isset($_POST['submit'])){
    $to = "ojelabi4th@gmail.com"; // Enter your email address here
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $name <$email>";

    if(mail($to, $subject, $message, $headers)){
        echo "Thank you for your message!";
    } else{
        echo "Sorry, there was a problem sending your message. Please try again.";
    }
}
?>

