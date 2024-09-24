<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendotp($email, $otp) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Disable verbose debug output for production
        $mail->isSMTP();                                        //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                   //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                               //Enable SMTP authentication
        $mail->Username   = 'vibeverse08@gmail.com'; //SMTP username
        $mail->Password   = 'xiek rltz zcos rrrg';              //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable implicit TLS encryption
        $mail->Port       = 465;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('vibeverse08@gmail.com', 'Vibe Verse');
        $mail->addAddress($email);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Your Vibe Verse OTP Code';
        $mail->Body    = '<body>
            <div class="container">
                <div class="header">
                    <h1>Vibe Verse</h1>
                </div>
                <div class="content">
                    <h2>Your One-Time Password (OTP)</h2>
                    <p>Use the OTP below to verify your email address and complete your registration for Vibe Verse.</p>
                    <div class="otp-code">' . htmlspecialchars($otp) . '</div>
                    <p>This OTP is valid for the next 10 minutes. If you did not request this, please ignore this email.</p>
                </div>
                <div class="footer">
                    <p>&copy; 2024 Vibe Verse. All rights reserved.</p>
                </div>
            </div>
        </body>';
        $mail->AltBody = 'Your OTP code is: ' . htmlspecialchars($otp);

        //Send the email
        $mail->send();
        echo '<script>alert("A new verification code has been sent to your email.");</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
