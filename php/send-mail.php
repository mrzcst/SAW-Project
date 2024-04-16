<?php
 
 require('../phpMailer/PHPMailer.php');
 require('../phpMailer/SMTP.php');
 require('../phpMailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require('../php/db.php');

//Get Text
if(isset($_POST['submit'])){
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $alt_content = $_POST['alt-content'];
}

//Mail Sender 
$result = mysqli_query($connect, "SELECT * FROM subscribers");
while ($row = mysqli_fetch_object($result))
{
    $mail = new PHPMailer(true);
 
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'user-gmail';
        $mail->Password   = 'pwd';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
 
        $mail->setFrom('mynews.saw@gmail.com', 'Constantin');
        $mail->addAddress($row->sub_email);     // Add a recipient
        $mail->addReplyTo('mynews.saw@gmail.com', 'Constantin');
 
        // Content (should be modified)
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $content;
        $mail->AltBody = $alt_content;
 
        $mail->send();
        header("location: ../index/index.php");
        //echo '<p>Message has been sent to ' . $row->sub_email . '</p>';
    } catch (Exception $e) {
        echo "<p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
    }
}