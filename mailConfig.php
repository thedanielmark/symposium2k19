<?php
$mail->From = "noreply.flair2k19@gmail.com";
$mail->FromName = "No reply";
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
$mail->Port = 465; // Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;
$mail->Username = "noreply.flair2k19@gmail.com"; // SMTP username
$mail->Password = "licetrocks"; // SMTP password
$mail->AddAddress("flairit2019@gmail.com", ""); //replace myname and mypassword to yours
$mail->AddReplyTo("flairit2019@gmail.com", "");
?>
