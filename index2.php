
<?php
$to = "sakshitaneja157@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: sakshitaneja157@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>