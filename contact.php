<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    $emailFrom = 'oneilllauren96@gmail.com';
    $emailSub = "Query";
    $emailBody = "User Name: $name.\n".
                 "User e-mail: $email.\n".
                 "User Query: $query.\n";
    
    $to = "oneilllauren96@gmail.com";
    $headers = "From: $emailFrom \r\n";
    $headers .="Reply to: $email \r\n";

    mail($to, $emailSub, $emailBody, $headers);
    header("Location: contact.html");
    
?>
