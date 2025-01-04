<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<style>
  *{
    outline: none;
  }
  .img1{
   
    padding-right: 29rem;
   
    padding-bottom: 40rem;
  }
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .signup-form {
        background-color: #fff;
        padding: 20px;
        width: 300px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .signup-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: calc(100% - 12px);
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #6712f0;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #f012c0;
    }
</style>

<body>
     <img  class="img1" src="assets/images/logo.png">
                       
    <?php
    $otp = rand(1000, 9999);
    $_SESSION['otp'] = $otp;
    if (isset($_POST['sub'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $num = $_POST['mobile_No'];
        $pass = $_POST['password'];

        $urname = substr($name, 0, 3);
        $uremail = substr($email, 0, 5);
        $urpass = substr($pass, 0, 2);
        $urnum = substr($num, 0, 2);
        $username = $urname . $uremail . $urpass . $urnum;

        $_SESSION['s_name'] = $name;
        $_SESSION['s_email'] = $email;
        $_SESSION['s_mobile'] = $num;
        $_SESSION['s_pass'] = $pass;
        $_SESSION['s_urn'] = $username;
        header("location: verification-otp.php");
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'singhvivek20200@gmail.com';                     //SMTP username
            $mail->Password   = 'awxruocfefoixzuv';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('singhvivek20200@gmail.com', 'Vivek');
            $mail->addAddress($email, $name);     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Hello HexaShop User - Verification OTP';
            $mail->Body    = ' <div
      style="
        max-width: 680px;
        margin: 0 auto;
        padding: 45px 30px 60px;
        background: #f4f7ff;
        background-image: url(https://archisketch-resources.s3.ap-northeast-2.amazonaws.com/vrstyler/1661497957196_595865/email-template-background-banner);
        background-repeat: no-repeat;
        background-size: 800px 452px;
        background-position: top center;
        font-size: 14px;
        color: #434343;
      "
    >
      <header>
        <table style="width: 100%;">
          <tbody>
            <tr style="height: 0;">
              <td>
                <img
                  alt=""
                  src="https://templatemo.com/tm-571-hexashop"
                  height="30px"
                />
              </td>
              <td style="text-align: right;">
                <span
                  style="font-size: 16px; line-height: 30px; color: #ffffff;"
                  >12 Nov, 2021</span
                >
              </td>
            </tr>
          </tbody>
        </table>
      </header>

      <main>
        <div
          style="
            margin: 0;
            margin-top: 70px;
            padding: 92px 30px 115px;
            background: #ffffff;
            border-radius: 30px;
            text-align: center;
          "
        >
          <div style="width: 100%; max-width: 489px; margin: 0 auto;">
            <h1
              style="
                margin: 0;
                font-size: 24px;
                font-weight: 500;
                color: #1f1f1f;
              "
            >
              Your OTP
            </h1>
            <p
              style="
                margin: 0;
                margin-top: 17px;
                font-size: 16px;
                font-weight: 500;
              "
            >
              Hey ,
            </p>
            <p
              style="
                margin: 0;
                margin-top: 17px;
                font-weight: 500;
                letter-spacing: 0.56px;
              "
            >
              Thank you for choosing HexaShop. Use the following OTP
              to complete the procedure to change your email address. OTP is
              valid for
              <span style="font-weight: 600; color: #1f1f1f;">5 minutes</span>.
              Do not share this code with others, including Hexashops.
            </p>
            <p
              style="
                margin: 0;
                margin-top: 60px;
                font-size: 40px;
                font-weight: 600;
                letter-spacing: 25px;
                color: #ba3d4f;
              "
            >'.$_SESSION['otp'].'</p>
          </div>
        </div>

        <p
          style="
            max-width: 400px;
            margin: 0 auto;
            margin-top: 90px;
            text-align: center;
            font-weight: 500;
            color: #8c8c8c;
          "
        >
          Need help? Ask at
          <a
            href="mailto:singhvivek20200@gmail.com"
            style="color: #499fb6; text-decoration: none;"
            >Hexashop@gmail.com</a
          >
          or visit our
          <a
            href=""
            target="_blank"
            style="color: #499fb6; text-decoration: none;"
            >Help Center</a
          >
        </p>
      </main>

      <footer
        style="
          width: 100%;
          max-width: 490px;
          margin: 20px auto 0;
          text-align: center;
          border-top: 1px solid #e6ebf1;
        "
      >
        <p
          style="
            margin: 0;
            margin-top: 40px;
            font-size: 16px;
            font-weight: 600;
            color: #434343;
          "
        >
          Hexashop Company
        </p>
        <p style="margin: 0; margin-top: 8px; color: #434343;">
          Address Channakya Puri, New Delhi, Delhi.
        </p>
        <div style="margin: 0; margin-top: 16px;">
          <a href="" target="_blank" style="display: inline-block;">
            <img
              width="36px"
              alt="Facebook"
              src="https://archisketch-resources.s3.ap-northeast-2.amazonaws.com/vrstyler/1661502815169_682499/email-template-icon-facebook"
            />
          </a>
          <a
            href=""
            target="_blank"
            style="display: inline-block; margin-left: 8px;"
          >
            <img
              width="36px"
              alt="Instagram"
              src="https://archisketch-resources.s3.ap-northeast-2.amazonaws.com/vrstyler/1661504218208_684135/email-template-icon-instagram"
          /></a>
          <a
            href=""
            target="_blank"
            style="display: inline-block; margin-left: 8px;"
          >
            <img
              width="36px"
              alt="Twitter"
              src="https://archisketch-resources.s3.ap-northeast-2.amazonaws.com/vrstyler/1661503043040_372004/email-template-icon-twitter"
            />
          </a>
          <a
            href=""
            target="_blank"
            style="display: inline-block; margin-left: 8px;"
          >
            <img
              width="36px"
              alt="Youtube"
              src="https://archisketch-resources.s3.ap-northeast-2.amazonaws.com/vrstyler/1661503195931_210869/email-template-icon-youtube"
          /></a>
        </div>
        <p style="margin: 0; margin-top: 16px; color: #434343;">
          Copyright © 2023 Company. All rights reserved.
        </p>
      </footer>
    </div>';
            $mail->AltBody = 'Your OTP is '.$_SESSION['otp'];

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
    ?>

    <div class="signup-form">
        <h2>Sign Up</h2>
        <form method="POST">

            <div class="form-group">
                <label for="username">Name:</label>
                <input type="text" id="name" name="name" class="inp" required>
            </div>
            <div class="form-group">
                <label for="email">Email_id:</label>
                <input type="email" id="email" name="email" class="inp" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="pass" name="password" class="inp" required>
            </div>
            <div class="form-group">
                <label for="mobile_No">Mobile_No:</label>
                <input type="text" id="num" name="mobile_No"  class="inp"  required>
            </div>
            <button type="submit" name="sub">Sign Up</button>
        </form>
    </div>

<script>
  $(document).ready(function(){
            // $(".inp").focus(function(){
            //     $(this).css("border","1px solid green")
            // })
            // $(".inp").blur(function(){
            //     $(this).css("border","1px solid red")
            // })
            $('.inp').keydown(function(){
                if($(this).val()){
                    $(this).css("border","2px solid green")
                }else{
                    $(this).css("border","2px solid red")
                }
            })
        });

</script>
</body>

</html>