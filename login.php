<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MentalHelp PH | Login</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <?php
    require './assets/css/bootstrap.php';
    ?>
</head>
<body>
<?php
    require './assets/components/navbar.php';
    ?>

<div class="container mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-md-4 ">
                <div class="text-center">
                <img src="./assets/images/logon.png" class="img-fluid h-50 w-50 ">
</div>
                <h2 class="text-center">Login</h2>
                <form>
                    <div class="form-group my-2">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group my-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block mt-4 ">Login</button>
</div>
                </form>
            </div>
        </div>
    </div>

    <?php
require './assets/js/bootstrap.php';
?>

</body>
</html>