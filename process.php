<?php
 
    $to = "mapdesigns@gmail.com"; 
    $from = "info@mikepeters.io";
    $name = $_REQUEST['name']; 
    $headers = "From: $from"; 
    $subject = "You have a message sent from your site"; 
 
    $fields = array(); 
    $fields{"name"} = "Name"; 
    $fields{"email"} = "Email"; 
    $fields{"phone"} = "Phone"; 
    $fields{"message"} = "Message";
 
    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
    $send = mail($to, $subject, $body, $headers);
 
?>