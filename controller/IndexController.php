<?php

require_once 'backend/IndexBackend.php';
require_once 'routes/AdminRoutes.php';
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
    else{
        echo alert_function('error' , 'Invalid Credentials');
        
    }
}
