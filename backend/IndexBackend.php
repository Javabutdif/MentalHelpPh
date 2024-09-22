<?php
require_once 'connection/DatabaseConnection.php';

function admin_login($email, $password)
{
    $db = Database::getInstance();
    $conn = $db->getConnection();

    $stmt = $conn->prepare("SELECT * FROM `admin` WHERE admin_email = ? AND admin_password = ?");
    $stmt->bind_param("ss", $email, $password);

    
    $stmt->execute();
    $resultAdmin = $stmt->get_result();

    if ($resultAdmin && $resultAdmin->num_rows > 0) {
        $adminGet = $resultAdmin->fetch_assoc();

        $_SESSION['id'] = $adminGet['admin_id'];
        $_SESSION['name'] = $adminGet['admin_name'];

       
        return true;
    } else {
        return false;
    }
}
