<?php
header("Content-Type:text/html; charset=utf-8");
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'PHPMailer/src/Exception.php';
 require 'PHPMailer/src/PHPMailer.php';
 require 'PHPMailer/src/SMTP.php';

 if(isset($_GET['submit']))
 {
    $name = htmlentities($_GET['name']);
    $email = htmlentities($_GET['email']);
    $subject = htmlentities($_GET['subject']);
    $message = htmlentities($_GET['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->CharSet = "utf-8"; 
    $mail->Username = '40943213@gm.nfu.edu.tw';
    $mail->Password = 'mhkcgcxynlbamkcs';
    $mail->Port = 465;
    $mail->SMTPSecure ='ssl';
    $mail->isHTML(true);
    $mail->setFrom($email,$name);
    $mail->addAddress('40943213@gm.nfu.edu.tw');
    $mail->Subject = ("$email($subject)");
    $mail->Body =$message;
    $mail->send();

    header("Location: ./response.php");
 }
?>
