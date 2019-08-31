<?php
error_reporting(E_ALL);
require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 2;

include "mailConfig.php";

$mail->WordWrap = 50; // set word wrap

$mail->IsHTML(true); // set email format to HTML

if(isset($_POST['subject'])) {
  $mail->Subject = $_POST['subject'];
}

if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['message']))
{
  $mail->Body = "Name: ".$_POST['firstName']." ".$_POST['lastName']."<br>Email: ".$_POST['email']."<br>Message: ".$_POST['message'];
}

// Format the way the details appear in the inbox using HTML.

if($mail->Send()) {
   header("Location: contact.html#");
}
else {echo "Send mail failed.";}
?>
