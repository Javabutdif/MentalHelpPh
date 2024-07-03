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
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <img src="./assets/images/mentalhelp.jpg" style="height: 4rem ; width: 4rem" class="mx-3" />
        <a class="navbar-brand" href="#">MentalHelp PH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="padding-right: 5rem; font-weight: bold " id="navbarNav">
        
            <ul class="navbar-nav ms-auto ">
            
                <li class="nav-item active" >
                    <a class="nav-link " href="#">Client Feedback </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
               
            </ul>
           
        </div>
    </nav>

    <div class="mt-5 container">
        <div class="row">
        <div class="col-6 p-2">
            <h1 class="mb-5">The strongest people are not those who show strength in front of us but those who win battles we know nothing about.</h1>
            <div class="d-flex flex-row gap-4 text-center">
                <button class="button get-start text-white">Get Started</button>
                <button class="button login-start text-white">Login</button>
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