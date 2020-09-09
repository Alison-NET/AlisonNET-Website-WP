<?php
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$titleText = $_POST['messageTitle'];

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userPhone = $_POST['phone'];
$selectedService = $_POST['service'];
$userMessage = $_POST['message'];


/**
 * Mail body
 */
$bodyText = '';

if(isset($userName)) $bodyText.= '<h2>Message from '.$userName.'</h2>';
if(!empty($selectedService)) $bodyText.= '<h4>on '.$selectedService.' service</h4>';
$bodyText.= '<hr><br>';
if(isset($userMessage)) $bodyText.= '<b>Users message</b>: '.$userMessage.'<br>';
$bodyText.= '<h3>Contacts</h3>';
if(isset($userEmail)) $bodyText.= '<b>Email:</b> '.$userEmail.'<br>';
if(isset($userPhone)) $bodyText.= '<b>Phone:</b> '.$userPhone;



$mail->isSMTP();                              // Set mailer to use SMTP
$mail->SMTPAuth = true;                       // Enable SMTP authentication
$mail->SMTPSecure = 'ssl';                    // Enable TLS encryption, `ssl` also accepted
$mail->Host = 'smtp.gmail.com';               // Specify main and backup SMTP servers
$mail->Port = '465';                            // TCP port to connect to / этот порт может отличаться у других провайдеров
$mail->isHTML();                                  // Set email format to HTML
$mail->Username = 'trs.yurts@gmail.com';     // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '90826Tyv';          // Ваш пароль от почты с которой будут отправляться письма
$mail->setFrom('AisonNET'); // От кого будет уходить письмо?
$mail->addAddress('tariksyurts@gmail.com'); // Кому будет уходить письмо?
// $mail->addAddress('alison@alisonnet.com'); // Кому будет уходить письмо?
$mail->SMTPDebug = 3;                       // Enable verbose debug output

$mail->Subject = $titleText;
$mail->AltBody = $titleText;
$mail->Body    = $bodyText;

// $mail->Send();

if(!$mail->Send()) {
	echo "<b>Error occured. Cant send mail</b> <br>";
	echo $mail->ErrorInfo;
}