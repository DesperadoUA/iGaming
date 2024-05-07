<?php
$_POST = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);
require('config.php');
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$title = "Заголовок письма";
$email = $_POST['email'];
$brand = $_POST['brand'];
$subject = $_POST['subject'];
$text = $_POST['text'];
$body = "";
$body .= "<p>Email: {$email}</p>";
$body .= "<p>Brand: {$brand}</p>";
$body .= "<p>Subject: {$subject}</p>";
$body .= "<p>Text: {$text}</p>";

try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->Host       = HOST; // SMTP сервера вашей почты
    $mail->Username   = USER_NAME; 
    $mail->Password   = PASSWORD; // Пароль на почте
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->setFrom(EMAIL, 'Имя отправителя');
    $mail->addAddress('gr34uk@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);