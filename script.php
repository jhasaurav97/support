<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['phone'];
    $message = $_POST['message'];
    $to = "jhasaurav972@gmail.com";
    $headers = "From: $email";
    if(mail($to, $subject, $message, $headers)){
        echo "Email sent!";
    }else{
        echo "Email sending failed...";
    }
}
?>