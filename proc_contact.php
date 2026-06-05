<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


require_once('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $client_name    = trim($_POST['client_name'] ?? '');
    $client_email   = filter_var(trim($_POST['client_email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $client_phone   = trim($_POST['client_phone'] ?? '');
    $client_subject = trim($_POST['client_subject'] ?? '');
    $client_message = trim($_POST['client_message'] ?? '');

    if (empty($client_name) || !$client_email || empty($client_phone) || empty($client_subject) || empty($client_message)) {
        echo "<script>
                alert('Validation failed. Please fill out all fields with valid information and try again.');
                window.location.href = 'contact';
              </script>";
        exit();
    }


    $adminSubject = "New Website Contact Form Inquiry - $client_subject";
    $adminBody = "
        <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
            <h2 style='color: #12462b;'>Contact Form Submission</h2>
            <p>A new message has been successfully sent through the website contact panel.</p>
            <hr style='border: 0; border-top: 1px solid #eee;'>
            <p><strong>Sender Identity Details:</strong></p>
            <ul>
                <li><strong>Full Name:</strong> $client_name</li>
                <li><strong>Email Address:</strong> $client_email</li>
                <li><strong>Phone Number:</strong> $client_phone</li>
                <li><strong>Subject Field:</strong> $client_subject</li>
            </ul>
            <p><strong>Message Content Plaintext:</strong></p>
            <div style='background: #f9f9f9; padding: 12px; border: 1px solid #ddd; border-radius: 4px;'>
                " . nl2br($client_message) . "
            </div>
        </div>
    ";

    $applicantSubject = "Thank you for contacting TechByFrancis";
    $applicantBody = "
        <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
            <h3>Dear $client_name,</h3>
            <p>Thank you for reaching out to us. Your message regarding <strong>\"$client_subject\"</strong> has been securely transmitted to our administrative desk.</p>
            <p>A support representative is reviewing your details and will get back to you within 24 business hours.</p>
            <hr style='border: 0; border-top: 1px solid #eee;'>
            <p>Best regards,<br><strong>Francis</strong><br>TechByFrancis Team</p>
        </div>
    ";

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'mail.techbyfrancis.com';
    $mail->SMTPAuth = true;
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'portfolio@techbyfrancis.com';
    $mail->Password = 'TECHbyfrancis101$$';
    $mail->From = 'portfolio@techbyfrancis.com';
    $mail->FromName = 'TechByFrancis';
    $mail->isHTML(true);

    $mail->addAddress('francisnwankwo1972@gmail.com');
    $mail->Subject = $adminSubject;
    $mail->Body = $adminBody;
    $adminSent = @$mail->send();

    $mail->clearAddresses();
    $mail->addAddress($client_email);
    $mail->Subject = $applicantSubject;
    $mail->Body = $applicantBody;
    @$mail->send();


    if ($adminSent) {
        echo "<script>
                alert('Thank you! Your message has been sent successfully.');
                window.location.href = 'contact';
              </script>";
    } else {
        echo "<script>
                alert('The mail server encountered an issue processing your request. Please try again later.');
                window.location.href = 'contact';
              </script>";
    }
    exit();
} else {
    header("Location: contact.php");
    exit();
}
