<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 587);

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output (set to 2 for more detailed debugging)
    $mail->isSMTP();                           // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';          // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                    // Enable SMTP authentication
    $mail->Username = 'kaushalsingh10a@gmail.com'; // SMTP username
    $mail->Password = 'ccnqymdqmtphmgaf';   // SMTP password
    $mail->SMTPSecure = 'tls';                 // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                         // TCP port to connect to

    if (isset($_POST['submit'])) {
      
        $to = "kaushalsingh10a@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $number = $_POST['number'];

        $mail->setFrom('kaushalsingh10a@gmail.com', 'Kaushal');
        $mail->addAddress('kajalsingh248a@gmail.com', 'Kajal'); // Add a recipient
        $mail->Subject = "Enquiry Mail SEO";
        $mail->Body = $name . " " . $number . " wrote the following:" . "\n\n" . $_POST['message'];
        $mail->isHTML(true);
        $mail->send();
        echo "T";
        // mail($to, $subject, $message, $headers);
        // mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
        // header('Location: thank_you.php');
        echo "<br>Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "F";
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
