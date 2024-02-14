<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';



if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $feedback=$_POST['feedback'];

    $mail=new PHPMailer(true);
    try{
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username="vasavj70@gmail.com";
        $mail->Password='nocublvpjonjzwtb';

        $mail->Port=587;


        $mail->setFrom($email,$name);

        $mail->addAddress('vasavj70@gmail.com'."Vasanth");

        $mail->isHTML(true);
        $subject="Enquiry Form";
        $mail->Subject=$subject;


        $body='<p>Reg - Enquiry </p>';
        $body.=$name;
        $body.=$email;
        $body.=$phone;
        $body.=$feedback;

        $mail->Body=$body;

$mail->send();
echo "<h1> Message has been send </h1>";
    }
    catch(Exception $e){
        echo" Something went wrong {$mail->ErrorInfo}";

    }

}


        // $mail->Host       = 'smtp.gmail.com';
        // $mail->SMTPAuth   = true;
        // $mail->Username   = 'vasavj70@gmail.com';
        // $mail->Password   = 'nocublvpjonjzwtb';
        // $mail->SMTPSecure = 'tls';
        // $mail->Port       = 587;

        ?>