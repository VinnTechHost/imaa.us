<?php
$name = $_POST['firstNameV'];
$name2 = $_POST['lastNameV'];
$mail = $_POST['emailV'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= $name2 . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());
$message .= " " . date("H") . ":" .  date("i");

$para = 'nonprofitima@gmail.com';
$asunto = 'Quiero ser Voluntario IMAA';

mail($para, $asunto, $message, $header);

header("Location:index.html");
?>