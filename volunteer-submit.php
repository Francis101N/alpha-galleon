<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $first_name     = trim($_POST['first_name'] ?? '');
    $last_name      = trim($_POST['last_name'] ?? '');
    $email          = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone          = trim($_POST['phone'] ?? '');
    $address        = trim($_POST['address'] ?? '');
    $program_target = trim($_POST['program_target'] ?? '');
    $state          = trim($_POST['state'] ?? '');
    $donation_tier  = trim($_POST['donation_tier'] ?? '');
    $message        = trim($_POST['message'] ?? '');

    if (empty($first_name) || empty($last_name) || !$email || empty($phone) || empty($address) || empty($program_target) || empty($state)) {
        echo "<script>
                alert('Validation failed. Please fill out all required fields with valid information and try again.');
                window.history.back();
              </script>";
        exit();
    }

    $program_display = str_replace('_', ' ', $program_target);
    $donation_display = !empty($donation_tier) ? str_replace('_', ' ', $donation_tier) : 'Not specified';


    $adminSubject = "New Volunteer Application Received - $first_name $last_name";
    $adminBody = "
        <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
            <h2 style='color: #12462b;'>Volunteer Application Intake</h2>
            <p>A new candidate has successfully submitted an application form through the volunteer portal.</p>
            <hr style='border: 0; border-top: 1px solid #eee;'>
            <p><strong>Applicant Identity & Demographics:</strong></p>
            <ul>
                <li><strong>Full Name:</strong> $first_name $last_name</li>
                <li><strong>Email Address:</strong> $email</li>
                <li><strong>Phone Number:</strong> $phone</li>
                <li><strong>Residential Address:</strong> $address</li>
                <li><strong>Target State:</strong> $state</li>
            </ul>
            <p><strong>Engagement Matrix Specifications:</strong></p>
            <ul>
                <li><strong>Selected Program:</strong> <span style='text-transform: capitalize;'>$program_display</span></li>
                <li><strong>Contribution Preference:</strong> <span style='text-transform: capitalize;'>$donation_display</span></li>
            </ul>
            <p><strong>Additional Note / Cover Message:</strong></p>
            <div style='background: #f9f9f9; padding: 12px; border: 1px solid #ddd; border-radius: 4px;'>
                " . (!empty($message) ? nl2br($message) : 'No structural notes or specific parameters appended.') . "
            </div>
        </div>
    ";

    $applicantSubject = "Volunteer Application Received";
    $applicantBody = "
        <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
            <h3>Dear $first_name,</h3>
            <p>Thank you for your willingness to make an impact. We have safely received your volunteer application for our <strong>\"" . ucwords($program_display) . "\"</strong> track.</p>
            <p>Our coordination desk is currently processing incoming assignments and will reach out to you via email or phone shortly with logistics details.</p>
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
    $mail->addAddress($email);
    $mail->Subject = $applicantSubject;
    $mail->Body = $applicantBody;
    @$mail->send();

    if ($adminSent) {
        echo "<script>
                alert('Application submitted successfully! Thank you for volunteering.');
                window.location.href = 'get-involved';
              </script>";
    } else {
        echo "<script>
                alert('The mail server encountered an issue processing your submission. Please try again later.');
                window.location.href = 'get-involved';
              </script>";
    }
    exit();
} else {
    header("Location: get-involved");
    exit();
}
