<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["submit"])) {

    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $username = $_POST["username"];
    $memberId = $_POST["memberid"];
    $pwd = $_POST["password"];
    $repeatPwd = $_POST["con_password"];
    $nic = $_POST["nic"];
    $birthday = $_POST["birthday"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $gen = isset($_POST["gen"]) ? $_POST["gen"] : null;

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $uidExists = uidExists($conn, $username);
    $userEmailExist = userEmailExist($conn, $email);
    $verificationCode = sha1($email.time());
    $verificationURL = 'http://localhost/Our%20Site/includes/verify.php?code='.$verificationCode;

    
    if ($uidExists) {
      header ("Location:../application.php?error=usernametaken");
      exit();
    }

    else if ($userEmailExist) {
      header ("Location:../application.php?error=emailtaken");
      exit();
    }
      
    else {
      createUser ($conn, $firstName, $lastName, $username, $memberId, $pwd, $nic, $birthday, $address, $email, $mobile, $city, $zip, $gen, $verificationCode);

      try {

        // Create PHPMailer instance
          $mail = new PHPMailer(true);
    
          // SMTP configuration
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->Username ='vichithwikramarathna@gmail.com';
          $mail->Password ='hybmhqeszduougns';
          $mail->SMTPSecure = 'ssl';
          $mail->Port = 465;
    
          // Set sender and recipient
          $mail->setFrom('vichithwikramarathna@gmail.com');
          $mail->addAddress($email);
    
          // Email content
          $mail->isHTML(true);
          $mail->Subject = "D.S.Senanayake Memorial Public Library";
          $mail->Body = ' <body style="background-color: #ffffff; color: #000000;"> 
                          <h2 style="color: orange;">Hello '.$firstName.' '.$lastName.', Welcome to the D.S.Senanayake Memorial Public Library</h2>
                          <p style="color: #000000; background-color: #ffffff;">We are thrilled to have you as a new member of our community of readers and learners. Our library is a place where knowledge meets curiosity, and we\'re excited to embark on this literary journey with you.</p>
                          <p style="color: #000000; background-color: #ffffff;">As a member, you now have access to a vast collection of books, resources, and events designed to enrich your reading experience. Whether you\'re a fiction enthusiast, a history buff, or someone exploring new interests, our library is here to cater to your diverse tastes.</p>
                          <p style="color: #000000; background-color: #ffffff;">Feel free to explore our shelves, attend our events, and make the most of your library membership. If you have any questions or need assistance, our friendly staff is always ready to help. Make yourself at home, and let the adventures begin!</p>
                          <p style="color: #000000; background-color: #ffffff;">Once again, Welcome!</p><br>
                          <h2 style="color: teal;">Verification Steps</h2>
                          <p style="color: #000000; background-color: #ffffff;">1. Click on the following link: <a href="'.$verificationURL.'">Click Here to verify your email</a>
                          <p style="color: #000000; background-color: #ffffff;">2. Log in with your registered credentials.</p>
                          <p style="color: #000000; background-color: #ffffff;">3. Once logged in, your email address will be automatically verified, and your library account will be activated.</p><br>
                          <p style="color: #000000; background-color: #ffffff;">D.S.Senanayake Memorial Public Library,<br>7JRP+P6J,<br>Ahalepola Kumarihami Mawatha,<br>Kandy 20000.</P> ';
    
          // Enable debugging (optional)
          //$mail->SMTPDebug = 2;
          //$mail->Debugoutput = function($str, $level) {
          //  echo "debug level $level; message: $str";
          //};
    
          // Send email
          $mail->send();
    
          // Redirect to new.php
          header("Location:../index.php");
          exit();
        }

        catch (Exception $e) {
          echo "Message could not be sent. Try Again Later: {$mail->ErrorInfo}";
        }

    }

  }
?>