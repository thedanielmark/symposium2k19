<?php
error_reporting(E_ALL);
require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 2;

include "mailConfig.php";

$mail->WordWrap = 50; // set word wrap

$mail->IsHTML(true); // set email format to HTML

$mail->Subject = 'Event registration';


if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['inst']) && isset($_POST['dept']) && isset($_POST['event']))
{
  $mail->Body = "Name: ".$_POST['firstName']." ".$_POST['lastName']."<br>Gender: ".$_POST['gender']."<br>Email ID: ".$_POST['email']."<br>Institution: ".$_POST['inst']."<br>Department: ".$_POST['dept']."<br>Event: ".$_POST['event'];
}

// Format the way the details appear in the inbox using HTML.

if($mail->Send()) {
   header("Location: register.html");
}
else {echo "Send mail failed.";}
?>
