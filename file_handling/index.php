<?php

$url=$_SERVER['REQUEST_URI'];
$visit = urldecode($url);
var_dump ($visit);
$new_name = substr($visit,9);
echo $new_name;
    if (strlen($new_name)<1)
    {
        echo"file is not created";
    }
    else
    {
        $file_path = "visitor/$new_name.txt";
        $file_create =fopen($file_path,"a");

        $date_and_time= date('y-m-d H:i:s');

        fwrite($file_create,"\n visited $new_name at $date_and_time");
        fclose($file_create);


    }

$visitor_folder =scandir("visitor");



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kishorekumarcdckap@gmail.com';                     //SMTP username
    $mail->Password   = 'eecrdspikjuucsgp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kishorekumarcdckap@gmail.com', 'kishore');
    $mail->addAddress('jeevasdckap@gmail.com', 'chetta');     //Add a recipient
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    for ($i =2;$i<count($visitor_folder);$i++){
        $mail->addAttachment("visitor/$visitor_folder[$i]");
    }
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Sample mail from php';
    $mail->Body    = 'Hi Jeeva I have don it!';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}