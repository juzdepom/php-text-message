<?php

$to = "6267097537@tmomail.net";
$from = "julia.gao.miller@gmail.com";
$message = "This is a text message\n New line";
$headers = "From: $from\n";

mail($to, '', $message, $headers);

echo "Sending text message..."

?>

<!-- SMS GATEWAY DOMAINS
Verizon: vtext.com
ATT: text.att.net
Spring: messaging.sprintpcs.com
TMobile: tmomail.net -->