<?php

require_once 'backend/IndexBackend.php';
require_once 'routes/AdminRoutes.php';
require_once 'routes/PatientRoutes.php';
require_once 'routes/ProfessionalRoutes.php';
require_once 'assets/prompts/alert.php';
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



function generateOTP($length = 6)
{
    return rand(pow(10, $length - 1), pow(10, $length) - 1);
}

function sendOtp($email)
{

    $recipientEmail = $email;
    $otp = generateOTP();
    $subject = 'Your OTP Code';
    $message = "Your OTP code is: $otp";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mentalhelpph75@gmail.com';
        $mail->Password   = 'mnvx ajkq hmsj mdlr';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('mentalhelpph75@gmail.com', 'MentalHelp PH [Diones]');
        $mail->addAddress($recipientEmail);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Send the email
        $mail->send();
        echo 'OTP has been sent to your email: ' . $recipientEmail;

        // Store email and OTP in session
        $_SESSION['email'] = $recipientEmail;
        $_SESSION['otp'] = $otp;

        // After sending the OTP, display the OTP input form
        displayOtpForm();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function displayOtpForm()
{
    // Display the form to input the OTP
    echo '
        <form action="" method="POST">
            <label for="otp">Enter OTP:</label>
            <input type="text" name="inputOtp" id="otp" required>
            <button type="submit" name="verifyOtp">Verify OTP</button>
        </form>
    ';
}


if (isset($_POST['verifyOtp'])) {
    $inputOtp = $_POST['inputOtp'];

    // Verify OTP
    if (verifyOtp($inputOtp)) {
        echo 'OTP verified successfully!';
    } else {
        echo 'Invalid OTP. Please try again.';
    }
}

function verifyOtp($inputOtp)
{

    if (isset($_SESSION['otp']) && $_SESSION['otp'] == $inputOtp) {
        return true;
    } else {
        return false;
    }
}



if (isset($_POST['submitLogin'])) {
    $emailData = $_POST['emailLogin'];
    $passwordData = $_POST['passwordLogin'];

    if (admin_login($emailData, $passwordData)) {
        //For now mu add rag logic for sessionhandling
        session_regenerate_id();
        $_SESSION['is_regenerated'] = true;
        $_SESSION['flag'] = true;
        echo admin_dashboard_route();
    }
    else if(patient_login($emailData, $passwordData)){
        session_regenerate_id();
        $_SESSION['is_regenerated'] = true;
        $_SESSION['flag'] = true;
        echo patient_dashboard_route();
    }
    else if(professional_login($emailData, $passwordData)){
        session_regenerate_id();
        $_SESSION['is_regenerated'] = true;
        $_SESSION['flag'] = true;
        echo professional_dashboard_route();
    }
    else{
        echo alert_function('error' , 'Invalid Credentials');
        
    }
}

if(isset($_POST['submitRegister'])){
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];
    $confirm_password = $_POST['userConfirmPassword'];
    $gender = $_POST['userGender'];
    $age = $_POST['userAge'];
    $address = $_POST['userAddress'];
    $status = $_POST['userStatus'];
    $contact = $_POST['userContact'];


    if($password === $confirm_password){

        if (sendOtp($email)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            if (patient_register($firstname, $lastname, $email, $hashed_password, $gender, $age, $address, $status, $contact)) {
                echo alert_function('success', 'Patient Successfully Registered');
            } else {
                echo alert_function('error', 'Internal Server Error!');
            }
        }


       
        
    }
    else{
         echo alert_function('error' , 'Password Mismatch');
      
    }


}

if (isset($_POST['profSubmitRegister'])) {
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirmpassword']));
    $type = htmlspecialchars(trim($_POST['profession']));
    $experience = htmlspecialchars(trim($_POST['experience']));
    $license = htmlspecialchars(trim($_POST['license'])); 
    $files = htmlspecialchars(trim($_POST['fileType']));
    $contact = htmlspecialchars(trim($_POST['contact']));
    $status = "Pending";

    
    if($password === $confirm_password){
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        if(professional_register($firstname, $lastname, $email, $hashed_password, $type, $experience, $license, $status, $contact, $files) ){
            echo alert_function('success' , 'Successfully registered as a professional. Please wait for your verification to log in.');
        }
        else{
             echo alert_function('error' , 'Internal Server Error!');
        }
        
    }
    else{
         echo alert_function('error' , 'Password Mismatch');
      
    }
    
}
