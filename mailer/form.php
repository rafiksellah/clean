<?php

/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Replace contact@example.com with your real receiving email address

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';


if (isset($_POST['submit'])) {

$name = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$projet = $_POST['projet'];
$message = $_POST['message'];
$mail = new PHPMailer(true);


    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'rafiksellah5@gmail.com';                     
    $mail->Password   = '*Roma1234'; 
    // $mail->SMTPOptions = array(
    //         'ssl' => array(
    //         'verify_peer' => false,
    //         'verify_peer_name' => false,
    //         'allow_self_signed' => true
    //         )
    //     );                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    $mail->setFrom($email, 'demande de devis');
    $mail->addAddress('rafiksellah5@gmail.com',$name);     


    $mail->isHTML(true);                                
    $mail->Subject = "Demande de devis de la part de $name";
    $mail->Body    = "Nom: $name <br><br> Prenom: $prenom <br><br> projet: $projet <br><br> Message: $message" ;
    $mail->AltBody = 'merci de prendre en consederation ma demande de devis ';

    
    try {
        $mail->send();
        echo json_encode(['success'=>true]);
    } catch (Exception $e) {
        echo json_encode(['success'=>false]);
    }
}