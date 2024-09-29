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
    <link rel="stylesheet" href="../../assets/css/styles.css">
   
    <?php
    require_once '../../assets/css/bootstrap.php';
    require_once '../datatable_components/datatable_css.php';
    include '../components/Navbar.php';
    ?>
</head>
<body>
    <?php
    echo navbar("Patients", "AdminDashboard.php", "Dashboard", "Patients", "Professionals");


    $header = ['patient_id', 'firstname', 'lastname', 'email', "addresses", "gender", "age", "patient_status", "contact_number"];
    $data = getAllPatients();
    ?>
    
    <div class="px-1 pt-3 table-responsive-xl">
        <?php echo TableComponent($header, $data, "Edit", "Delete"); ?>
    </div>

   
    <div id="confirmationModalContainer"></div>
    <div id="editModalContainer"></div>

</body>


<script>
   
    new DataTable('#example');


</script>

<script>
// Function to handle edit button click
function handleEditClick(event) {
    const patientId = event.target.getAttribute('data-id');
    console.log(`Edit button clicked for patient ID: ${patientId}`);
    alert(`Edit button clicked for patient ID: ${patientId}`);
     document.getElementById('editModalContainer').innerHTML = `<?php echo edit_modal('${patientId}'); ?>`;

 
        $('#EditModal').modal('show');
    // Add your edit functionality here
}

// Function to handle delete button click
function handleDeleteClick(event) {
    const patientId = event.target.getAttribute('data-id');
    console.log(`Delete button clicked for patient ID: ${patientId}`);
    alert(`Delete button clicked for patient ID: ${patientId}`);
    // Add your delete functionality here
}

// Attach event listeners after the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    const editButtons = document.querySelectorAll('[id^=edit-btn-]');
    const deleteButtons = document.querySelectorAll('[id^=delete-btn-]');

    // Attach event listener to all edit buttons
    editButtons.forEach(button => {
        button.addEventListener('click', handleEditClick);
    });

    // Attach event listener to all delete buttons
    deleteButtons.forEach(button => {
        button.addEventListener('click', handleDeleteClick);
    });
});
</script>
<?php 
    require_once '../datatable_components/datatable_js.php';
?>
</html>
