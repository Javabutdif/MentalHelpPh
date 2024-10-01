<?php
require_once '../components/TableComponent.php';
require_once '../../controller/AdminController.php';
require_once '../components/Modal.php';
require_once '../components/EditModal.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MentalHelp PH | Admin</title>

    <?php
    require './datatable_component/bootstrap.php';
    include '../components/Navbar.php';
    ?>
</head>

<body>
    <div class="text-center">
        <h2>Patients</h2>
    </div>
    <?php
    echo navbar("Patients", "AdminDashboard.php", "Dashboard", "Patients", "Professionals");

    // Fetch patient data
    $header = ['patient_id', 'firstname', 'lastname', 'email', 'addresses', 'gender', 'age', 'patient_status', 'contact_number'];
    $data = getAllPatients();


    echo TableComponent($header, $data,'View', 'Edit', 'Delete');
    ?>


    <!-- Modal containers -->
    <div id="confirmationModalContainer"></div>
    <div id="editModalContainer"></div>


    <?php
    require './datatable_component/bootstrap_js.php';
    ?>


</body>

</html>