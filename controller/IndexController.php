<?php

require_once 'backend/IndexBackend.php';
require_once 'routes/AdminRoutes.php';
require_once 'routes/PatientRoutes.php';
require_once 'routes/ProfessionalRoutes.php';
require_once 'assets/prompts/alert.php';


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
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        if(patient_register($firstname, $lastname, $email, $hashed_password, $gender, $age, $address, $status, $contact) ){
            echo alert_function('success' , 'Patient Successfully Registered');
        }
        else{
             echo alert_function('error' , 'Internal Server Error!');
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
