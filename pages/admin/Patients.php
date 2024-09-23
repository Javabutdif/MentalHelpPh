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
<body>
    <?php
    echo navbar("Patients" , "AdminDashboard.php","Dashboard",  "Patients" , "Professionals");
    ?>
    
    <h1>This is patients</h1>
</body>
</html>