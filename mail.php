<?php

$to ='j_w07@wp.pl';
// $name = $_POST['name'];
// $email = $_POST['email'];
$subject = 'Nowy mail od'. $name . '('. $email . ')';
// $message = $_POST['message'];
$headers = 'From:' . $name . '('. $email . ')';
$headers .= 'Content-Type: text/plain; charset=utf-8' . "\r\n";


mail($to, $subject, $message, $headers);
echo 'Wiadomość wysłana'
?>