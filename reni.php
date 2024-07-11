<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;



   
    if(
        isset($_POST['finame']) && isset($_POST['laname'])
        && isset($_POST['phone']) && isset($_POST['mail'])
        && isset($_POST['messo'])){

            $firstname = $_POST['finame'];
            $lastname = $_POST['laname'];
            $phone = $_POST['phone'];
            $email = $_POST['mail'];
            $message = $_POST['messo'];

            require_once('PHPMailer/src/Exception.php');
            require_once('PHPMailer/src/PHPMailer.php');
            require_once('PHPMailer/src/SMTP.php');


    
            try{
            //seting smtp
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Host = "smtp.gmail.com";
            $mail->Username = 'zikireni48@gmail.com';
            $mail->Password = '';
            $mail->Port = 587;

            //setting values
            $mail->isHTML(true);
            $mail->setFrom($email, $firstname." ".$lastname);
            $mail->addAddress('zikireni48@gmail.com');
            $mail->addReplyTo($email);
            $mail->Subject = "Message Concerning your Portfolio";
            $mail->Body="<h1>Notification from Your Portifolio. Contact:$phone</h1>".$message;
            $mail->AltBody = $message;
            
            $mail->Send();
            if($mail->Send()){
                return "Your message has been sent successfully";
            }
    
            }catch(Exception $e){
                echo $e;
            }


        }





?>
