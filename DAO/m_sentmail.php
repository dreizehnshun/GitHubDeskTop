<?php
require 'Mailer/src/Exception.php';
require 'Mailer/src/PHPMailer.php';
require 'Mailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function SendMail($email, $sub, $name, $message)
{
  $mail = new PHPMailer(true);
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'hieupvps37465@fpt.edu.vn';                     //SMTP username
  $mail->Password   = 'xanx hndu vptm oxvb';       //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = 465;
  $mail->CharSet    = 'UTF-8';
  $mail->setFrom('hieupvps37465@fpt.edu.vn', 'Epic foot');
  $mail->addAddress($email, $name);     //Add a recipient
  $mail->isHTML(true);
  $mail->Subject = $sub;
  $mail->Body    = $message;
  $mail->send();
}
