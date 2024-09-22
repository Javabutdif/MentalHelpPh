<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MentalHelp PH | Home</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <?php
    require './assets/css/bootstrap.php';
    ?>
</head>

<body>
   <?php require './assets/components/navbar.php' ?>
    <div class="mt-5 pt-5 container">
        <div class="row">
        <div class="col-6 p-2">
            <h1 class="mb-5">The strongest people are not those who show strength in front of us but those who win battles we know nothing about.</h1>
            <div class="d-flex flex-row gap-4 text-center">
                <button class="button get-start text-white" type="button" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                <a href="login.php" class="button login-start text-white">Login</a>
            </div>
            
        </div>
        <div class="col-6">
        <img class=" img-fluid img-start" src="./assets/images/mh.png">
        </div>
    </div>

    <div class="mt-5">
    <p>Your emotions are important to us! MentalHelp Ph offers effective tools and programs designed to empower you in managing feelings of depression, anxiety, or stress. Developed by renowned experts with extensive experience in positive psychology, mindfulness, and cognitive behavioral therapy, our techniques are grounded in evidence-based interventions.</p>
</div>
   
    </div>
</body>


<?php
include './assets/components/modal.php';
require './assets/js/bootstrap.php';
?>


</html>
<script src="https://meet.jit.si/external_api.js"></script>

<script>
    const domain = 'meet.jit.si';
    const options = {
        roomName: 'PickAnAppropriateMeetingNameHere',
        width: 700,
        height: 700,
        parentNode: document.querySelector('#meet')
    };
    const api = new JitsiMeetExternalAPI(domain, options);
</script>