<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MentalHelp PH | Admin</title>


    <?php
    require_once '../../assets/css/bootstrap.php';
    ?>


</head>

<body>
    <?php
    include 'components/Navbar.php';
    ?>
    <div class="container dashboard-container">

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-white bg-primary dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Registered Patients</h5>
                        <p class="card-text display-4">1234</p>
                    </div>
                </div>
            </div>

            <!-- Professionals card -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-white bg-success dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Registered Professionals</h5>
                        <p class="card-text display-4">567</p>
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