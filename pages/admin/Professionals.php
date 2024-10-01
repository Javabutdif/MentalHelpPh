<?php
require_once '../components/TableComponent.php';
require_once '../../controller/AdminController.php';

// Determine if we are displaying all professionals or pending requests
$flag = isset($_GET['view']) && $_GET['view'] === 'pending' ? false : true;

$header = ['professional_id', 'firstname', 'lastname', 'email', "type", "experience", "license", "contact_number"];
$dataPending = getAllPendingProfessionals();
$dataAccepted = getAllAcceptedProfessionals();
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
    <style>
        .hover-btn:hover {
            background-color: rgba(0, 166, 81, 1);
            ;
            color: white;
        }

        .selected-btn {
            background-color: rgba(0, 166, 81, 1);
            ;
            color: white;
        }

        .selectedBtn {
            color: rgba(0, 166, 81, 1);
        }

        h2 {
            color: rgba(0, 166, 81, 1);
        }
    </style>
</head>

<body>
    <?php
    echo navbar("Professionals", "AdminDashboard.php", "Dashboard", "Patients", "Professionals");
    ?>

    <div class="px-1 pt-3 table-responsive-xl">
        <div class="flex flex-row gap-3 py-4">
            <button onclick="window.location.href='?view=all'" class="btn border  hover-btn <?php echo $flag ? 'selected-btn' : 'selectedBtn' ?>">All Professionals</button>
            <button onclick="window.location.href='?view=pending'" class="btn border  hover-btn <?php echo !$flag ? 'selected-btn' : 'selectedBtn' ?>">Pending Request</button>
        </div>

        <?php
        if ($flag) {
            echo '<div class="text-center">
                    <h2>All Professionals</h2>
                </div>';
            echo TableComponent($header, $dataAccepted, 'View', 'Edit', 'Delete');
        } else {
            echo '<div class="text-center">
                    <h2>Pending Request</h2>
                </div>';
            echo TableComponent($header, $dataPending, 'View', 'Accept', 'Decline');
        }
        ?>
    </div>
</body>
<?php
require './datatable_component/bootstrap_js.php';
?>



</html>