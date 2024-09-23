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
    <title>MentalHelp PH | Patient</title>
     <link rel="stylesheet" href="../../assets//css//styles.css">

    <?php
    require_once '../../assets/css/bootstrap.php';
  
    include '../components/Navbar.php';
    ?>


</head>

<body >
    <?php
    echo navbar("Dashboard" , "PatientDashboard.php","Dashboard", "Message" , "Notification");
    ?>
     <h1>Hello <?php echo $_SESSION['name'] ?></h1>
    
    <?php
    require '../../assets/js/bootstrap.php';
    ?>
</body>

</html>