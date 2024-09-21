<?php

require_once 'backend/IndexBackend.php';
require_once 'routes/AdminRoutes.php';

if (isset($_POST['submitLogin'])) {
    $emailData = $_POST['emailLogin'];
    $passwordData = $_POST['passwordLogin'];

    if (admin_login($emailData, $passwordData)) {
        echo admin_dashboard_route();
    }
}
