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

try {

$mail->isSMTP();                              // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';               // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                       // Enable SMTP authentication
$mail->Username = 'tariksyurts@gmail.com';     // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'C0sNPVBLDVtaras';          // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                    // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                            // TCP port to connect to / этот порт может отличаться у других провайдеров
$mail->setFrom('example@mail.com'); // От кого будет уходить письмо?
$mail->addAddress('yurts.taras@comp-sc.if.ua'); // Кому будет уходить письмо?
$mail->isHTML(false);                                  // Set email format to HTML
$mail->SMTPDebug = 3;                       // Enable verbose debug output

$mail->Subject = $titleText;
$mail->AltBody = $titleText;
$mail->Body    = $bodyText;

$mail->send();

echo 'Message has been sent';
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}