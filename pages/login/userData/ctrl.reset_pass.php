<?php include "../../../includes/conn.php";
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../../vendor/phpmailer/phpmailer/src/SMTP.php';




if (isset($_POST['reset']) && !empty($_POST['email'])) { 
     
    $email = $db->real_escape_string($_POST['email']);
    // UNION ALL possible email

    $query = $db->query("SELECT email FROM tbl_admin WHERE email = '$email' UNION ALL SELECT email FROM tbl_registrar WHERE email = '$email' UNION ALL SELECT email FROM tbl_form WHERE email = '$email' UNION SELECT email FROM tbl_super_ad WHERE email = '$email'");


    if ($query-> num_rows > 0) {

        $activation = rand(100000, 999999);

        $admin = $db->query("SELECT email FROM tbl_admin WHERE email = '$email'");
        $numrow  = $admin->num_rows;

        $registrar = $db->query("SELECT email FROM tbl_registrar WHERE email = '$email'");
        $numrow1  = $registrar->num_rows;

        $alumni = $db->query("SELECT email FROM tbl_form WHERE email = '$email'");
        $numrow2  = $alumni->num_rows;

        $super_ad = $db->query("SELECT email FROM tbl_super_ad WHERE email = '$email'");
        $numrow3  = $super_ad->num_rows;

        if ($numrow > 0) {
            $query1 = $db->query("UPDATE tbl_admin SET activation_code = '$activation' WHERE email = '$email'");
        } elseif ($numrow1 > 0) {
            $query1 = $db->query("UPDATE tbl_registrar SET activation_code = '$activation' WHERE email = '$email'");
        } elseif ($numrow2 > 0) {
            $query1 = $db->query("UPDATE tbl_form SET activation_code = '$activation' WHERE email = '$email'");
        } elseif ($numrow3 > 0) {
            $query1 = $db->query("UPDATE tbl_super_ad SET activation_code = '$activation' WHERE email = '$email'");
        }

        $mail = new PHPMailer(true);



try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'larrygomez689@gmail.com';                     //SMTP username
    $mail->Password   = 'cgiqlfdxjfdgrpgb';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('larrygomez689@gmail.com', 'Larry');
    $mail->addAddress($email);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Reset Password | Verification Code';
            $mail->Body    = '
            Hello <br><br>
            Verification Code: <strong><h2>' . $activation . '</h2></strong>
            This 6-digit is to reset the Password of your account. Please copy and enter it in the request code. <br><br>
            SFAC-LP Representatives will never ask for this code. For your protection, please do not share this code with anyone.<br><br>
            Thanks,<br>
            Saint Francis of Assisi College - Las Piñas<br>
            All rights reserved.';

    $mail->send();
    $_SESSION["accept"] = $email;
    header("location: ../verification.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} 

        } else {
            $_SESSION["eEmail"] = true;
            header("location: ../reset_pass.php");
        }



}