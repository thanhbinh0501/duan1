<?php
include "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";
include "PHPMailer/src/POP3.php";
include "PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_email($to, $subject, $message, $name)
{
    $mail = new PHPMailer(true);
    try {
        $mail->CharSet = 'utf-8';
        $mail->SMTPDebug = 0; // 0: Tắt thông báo gỡ lỗi, 2: Hiển thị chi tiết lỗi
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'minhloi921819@gmail.com';
        $mail->Password = 'cuivyvecpapmmuzj';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        //Recipients
        $mail->setFrom('minhloi921819@gmail.com', 'Minh Lownj');
        $mail->addAddress($to, $name);
        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
