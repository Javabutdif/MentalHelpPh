<?php
require_once 'controller/IndexController.php';
?>

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

    <div class="container col-md-4 mt-5 shadow py-4 ">
        <div class="row justify-content-center ">
            <div class="col-md-10 ">
                <div class="text-center">
                    <img src="./assets/images/logonn.png" class="img-fluid h-50 w-50 ">
                </div>
                <h2 class="text-center">Welcome</h2>
                <form method="POST">
                    <div class="form-group my-2">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control rounded-5" id="email" placeholder="Enter email" name="emailLogin">
                    </div>
                    <div class="form-group my-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control rounded-5" id="password" placeholder="Password" name="passwordLogin">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="button btn-primary btn-block mt-4 " style="padding-left:3rem;padding-right:3rem" name="submitLogin">Login</button>
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