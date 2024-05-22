<?php
 
if($_POST) {
    $name = "";
    $email = "";
    $message = "";
     
    if(isset($_POST['fullname'])) {
      $name = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
        
    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']) . "\r\n";
        $message .= "Enviado el: " . date('d/m/Y', time()) . "\r\n";
        $message .= " " . date("H") . ":" .  date("i");
    }
     
    }
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";

     
    mail('nonprofitima@gmail.com', 'Quiero contactarme con IMAA', $message, $headers); 
     
   header("Location:index.html");
 
?>