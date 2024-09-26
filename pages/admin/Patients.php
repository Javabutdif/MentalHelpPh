<?php 
    require_once '../components/TableComponent.php';
    require_once '../../controller/AdminController.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MentalHelp PH | Admin</title>
    <link rel="stylesheet" href="../../assets//css//styles.css">
   
    <?php
    require_once '../../assets/css/bootstrap.php';
    require_once '../datatable_components/datatable_css.php';
     include '../components/Navbar.php';
    ?>
</head>
<body>
    <?php
    echo navbar("Patients" , "AdminDashboard.php","Dashboard",  "Patients" , "Professionals");

   $header = ['patient_id', 'firstname', 'lastname', 'email' , "addresses" , "gender" , "age" , "patient_status" , "contact_number"];
    $data =getAllPatients();

    
    ?>
    
  
    <div class="px-1 pt-3 table-responsive-xl">
    <?php echo TableComponent($header, $data, "Edit", "Delete"); ?>
    </div>

</body>
<?php 
    require_once '../datatable_components/datatable_js.php';
?>

<script>
  function DeleteButton(patient_id){
    console.log("Delete button press" + patient_id);
  }
    </script>

<script>
    new DataTable('#example');
    </script>
</html>