<?php
require '../../assets/prompts/alert.php';
require_once '../../controller/AdminController.php';

if (isset($_SESSION['is_regenerated']) && $_SESSION['flag']) {
    echo alert_function('success', 'Login Successfully!');
    $_SESSION['flag'] = false;
}
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
  
    include '../components/Navbar.php';
    ?>


</head>

<body >
    <?php
    echo navbar("Dashboard" , "AdminDashboard.php","Dashboard", "Patients" , "Professionals");
    ?>
    <div class="container dashboard-container">
    <h1>Hello <?php echo $_SESSION['name'] ?></h1>
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-white bg-primary dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Registered Patients</h5>
                        <p class="card-text display-4"><?php echo retrieve_patients_dashboard(); ?></p>
                    </div>
                </div>
            </div>

           
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-white bg-success dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Registered Professionals</h5>
                        <p class="card-text display-4"><?php echo retrieve_professionals_pending_dashboard(); ?></p>
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-white bg-success dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Pending  Account Requests</h5>
                        <p class="card-text display-4"><?php echo retrieve_professionals_active_dashboard(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require '../../assets/js/bootstrap.php';
    ?>
</body>

</html>