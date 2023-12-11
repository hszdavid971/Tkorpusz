<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $nev=htmlentities($_POST['nev']);
    $email=htmlentities($_POST['email']);
    $targy=htmlentities($_POST['targy']);
    $uzenet=htmlentities($_POST['uzenet']);
    $fajl=htmlentities($_POST['fajl']);

    $mail= new PHPMailer(TRUE);
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='tkorpuszinnovakftweb@gmail.com';
    $mail->Password='ntfemjvjwsnodkqc';
    $mail->Port=465;
    $mail->SMTPSecure='ssl';
    $mail->isHTML(true);
    $mail->setFrom($email,$nev);
    $mail->addAddress('tkorpuszinnovakftweb@gmail.com');
    $mail->Subject=("$email ($targy)");
    $mail->Body=$uzenet;
    $mail->send();
}
?>