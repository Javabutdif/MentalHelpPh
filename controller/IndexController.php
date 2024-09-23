<?php

require_once 'backend/IndexBackend.php';
require_once 'routes/AdminRoutes.php';
require_once 'routes/PatientRoutes.php';
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
