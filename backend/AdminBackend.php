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


function getAllAcceptedProfessionals(){
    $db = Database::getInstance();
    $conn = $db->getConnection();

    $sql = "SELECT mental_health_professionals.professional_id, mental_health_professionals.firstname, mental_health_professionals.lastname, mental_health_professionals.email, mental_health_professionals.type, mental_health_professionals.experience, mental_health_professionals.license, mental_health_professionals.contact_number FROM mental_health_professionals WHERE professional_status = 'Accepted'";

  
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


function getAllPendingProfessionals(){
    $db = Database::getInstance();
    $conn = $db->getConnection();

   
    $sql = "SELECT mental_health_professionals.professional_id, mental_health_professionals.firstname, mental_health_professionals.lastname, mental_health_professionals.email, mental_health_professionals.type, mental_health_professionals.experience, mental_health_professionals.license, mental_health_professionals.contact_number FROM mental_health_professionals WHERE professional_status = 'Pending'";

  
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



function retrieve_edit_patient($patient_id){
     $db = Database::getInstance();
    $conn = $db->getConnection();

    $sql = "SELECT patient.patient_id, patient.firstname, patient.lastname, patient.email, patient.addresses, patient.gender, patient.age, patient.patient_status, patient.contact_number FROM patient WHERE patient_id = $patient_id";

  
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

function retrieve_patients_dashboard()
{
    $db = Database::getInstance();
    $con = $db->getConnection();

    $sql = " SELECT count(patient_id) as id from patient";
    $result = mysqli_query($con, $sql);
    $patient = mysqli_fetch_array($result, MYSQLI_ASSOC);

    return $patient['id'];
}
function retrieve_professionals_active_dashboard()
{
    $db = Database::getInstance();
    $con = $db->getConnection();

    $sql = " SELECT count(professional_id) as id from mental_health_professionals WHERE professional_status = 'Accepted'";
    $result = mysqli_query($con, $sql);
    $professional = mysqli_fetch_array($result, MYSQLI_ASSOC);

    return $professional['id'];
}
function retrieve_professionals_pending_dashboard()
{
    $db = Database::getInstance();
    $con = $db->getConnection();

    $sql = " SELECT count(professional_id) as id from mental_health_professionals WHERE professional_status = 'Pending'";
    $result = mysqli_query($con, $sql);
    $professional = mysqli_fetch_array(
        $result, MYSQLI_ASSOC);

    return $professional['id'];
}
