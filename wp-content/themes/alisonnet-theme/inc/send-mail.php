<?php
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userPhone = $_POST['phone'];
$selectedService = $_POST['service'];
$userMessage = $_POST['service'];

/**
 * Mail body
 */
$titleText = 'Azizaz';

/**
 * Mail body
 */
$bodyText = '';

if(isset($userName)) $bodyText.= '<h2>Message from '.$userName.'</h2>';
if(!empty($selectedService)) $bodyText.= '<h4>on '.$selectedService.' service</h4>';
if(isset($userMessage)) $bodyText.= '<hr><p>Users message: '.$userMessage.'</p>';
$bodyText.= '<br><h6>Contacts</h6>';
if(isset($userEmail)) $bodyText.= '<br><b>Email: '.$userEmail.'</b>';
if(isset($userPhone)) $bodyText.= '<br><b>Phone: '.$userPhone.'</b>';

$mail->isSMTP();                              // Set mailer to use SMTP
$mail->Host = 'mail.alisonnet.com';               // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                       // Enable SMTP authentication
$mail->Username = 'test-mail@alisonnet.com';     // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'jAsI!LIHmwMJ';          // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                    // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                            // TCP port to connect to / этот порт может отличаться у других провайдеров
$mail->setFrom('test-mail@alisonnet.com'); // От кого будет уходить письмо?
$mail->addAddress('tariksyurts@gmail.com'); // Кому будет уходить письмо?
// $mail->addAddress('alison@alisonnet.com'); // Кому будет уходить письмо?
$mail->isHTML(true);                                  // Set email format to HTML
$mail->SMTPDebug = 3;                       // Enable verbose debug output

$mail->Subject = $titleText;
$mail->AltBody = $titleText;
$mail->Body    = $bodyText;

$mail->send();

if(!$mail->send()) {
	echo "<b>Error occured. Cant send mail</b> <br>";
	echo $mail->ErrorInfo;
}