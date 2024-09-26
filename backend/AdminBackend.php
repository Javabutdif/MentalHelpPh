<?php

require_once(__DIR__ . '/../connection/DatabaseConnection.php');


function getAllPatients(){
    $db = Database::getInstance();
    $conn = $db->getConnection();

    $sql = "SELECT patient.patient_id, patient.firstname, patient.lastname, patient.email, patient.addresses, patient.gender, patient.age, patient.patient_status, patient.contact_number FROM patient";

  
    $result = mysqli_query($conn, $sql);

  
    if (!$result) {
       
        die("Query Failed: " . mysqli_error($conn));
    }

    $listPatients = [];
    
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $listPatients[] = $row;
        }
    }

    return $listPatients;
}