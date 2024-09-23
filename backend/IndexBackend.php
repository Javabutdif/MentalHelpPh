<?php
require_once 'connection/DatabaseConnection.php';


//Admin Login
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

//Patient Login
function patient_login($email, $password)
{
    $db = Database::getInstance();
    $conn = $db->getConnection();

    // Prepare a statement to get the user by email
    $stmt = $conn->prepare("SELECT * FROM `patient` WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $patientData = $result->fetch_assoc();
        
        
        if (password_verify($password, $patientData['passwords'])) {
          
            $_SESSION['id'] = $patientData['patient_id'];
            $_SESSION['name'] = $patientData['firstname']. " ". $patientData['lastname'];
            
            return true;
        } else {
           
            return false;
        }
    } else {
       
        return false;
    }
}


//Patient Register
function patient_register($firstname, $lastname, $email, $hashedpassword, $gender, $age, $address, $status, $contact) {
    $db = Database::getInstance();
    $conn = $db->getConnection();

   
    $stmt = $conn->prepare("INSERT INTO patient (`firstname`, `lastname`, `email`, `passwords`, `gender`, `age`, `addresses`, `patient_status`, `contact_number`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    
    $stmt->bind_param("sssssisss", $firstname, $lastname, $email, $hashedpassword, $gender, $age, $address, $status, $contact);

   
    if ($stmt->execute()) {
        return true;
        
    } else {
        return false;
    }

    
    $stmt->close();
    $conn->close();
}

