<?php
require __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 1. Validate CAPTCHA
    if (!isset($_POST['captcha'], $_SESSION['captcha']) || 
        strtolower(trim($_POST['captcha'])) !== strtolower($_SESSION['captcha'])) {
        echo "Invalid CAPTCHA!";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // 2. SMTP Settings
        $mail->isSMTP();                                            
        $mail->Host       = 'gains.enterpriseappscloud.com';      
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mail@softwebtechnology.com';
        $mail->Password   = 'Softweb2020';
        $mail->Port       = 587;                                    
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                          

        // 3. Recipients
        $mail->setFrom('mail@softwebtechnology.com', 'SoftWeb - Contact Form');
        $mail->addAddress('info@softwebtechnology.com');

        // 4. Sanitize and Assign Post Data
        $name    = $_POST['name'] ?? 'Not Provided';
        $email   = $_POST['email'] ?? 'Not Provided';
        $phone   = $_POST['phone'] ?? 'Not Provided';
        $message   = $_POST['message'] ?? 'Not Provided';
        $service = $_POST['service'] ?? 'Not Selected';
        
        // 5. Email Content Config
        $mail->isHTML(true);
        $mail->Subject = "New Enquiry from SoftWeb Website";

        $mail->Body = '<div style="font-family: Arial, sans-serif; max-width: 600px; margin: auto; background-color: #ffffff; border: 1px solid #e0e0e0; border-radius: 8px; padding: 24px;">
            <h2 style="color: #333; border-bottom: 1px solid #ddd; padding-bottom: 10px;">New Contact Form Submission</h2>
            <table style="width: 100%; font-size: 14px; color: #444; line-height: 1.6;">
                <tr>
                    <td style="padding: 6px 0; width: 30%;"><strong>Name:</strong></td>
                    <td>' . htmlspecialchars($name) . '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0;"><strong>Email:</strong></td>
                    <td>' . htmlspecialchars($email) . '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0;"><strong>Phone Number:</strong></td>
                    <td>' . htmlspecialchars($phone) . '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0;"><strong>Requested Service:</strong></td>
                    <td>' . htmlspecialchars($service) . '</td>
                </tr>
                <tr>
                    <td style="padding: 6px 0;"><strong>Message:</strong></td>
                    <td>' . htmlspecialchars($message) . '</td>
                </tr>
            </table>
            <p style="margin-top: 30px; font-size: 12px; color: #999;">This enquiry was submitted via the contact form on the <strong>SoftWeb</strong> website.</p>
        </div>';

        $mail->send();
        echo "Message Sent Successfully";
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>