<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MentalHelp PH | About</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <?php
    require './assets/css/bootstrap.php';
    ?>
</head>
<body>
<?php
    require './assets/components/navbar.php';
    ?>
<section class="about-us-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-4">
          <h2>About Us</h2>
          <p>Welcome to MentalHelp PH, where we simplify the process of connecting students with qualified psychologists. Our mission is to provide personalized recommendations through a comprehensive database, ensuring students receive the mental health support they need.</p>
          <p>Our platform is built on the principle of making mental health services more accessible and convenient. By partnering with licensed psychiatrists, we offer a seamless consultation experience, helping students to easily find and connect with mental health professionals.</p>
        </div>
        <div class="col-lg-6 mb-4">
          <img src="./assets/images/logonn.png" alt="About Us" class="img-fluid">
        </div>
      </div>
      <div class="col gap-4 form-group">
        <div class="col-lg-4 mb-4 form-control">
          <h3>Our Mission</h3>
          <p>Our mission is to break down barriers to mental health care by providing a user-friendly platform for students to access professional psychological support.</p>
        </div>
        <div class="col-lg-4 mb-4 form-control">
          <h3>Our Vision</h3>
          <p>We envision a world where mental health care is readily accessible to everyone, and seeking help is as easy as a few clicks.</p>
        </div>
        <div class="col-lg-4 mb-4 form-control">
          <h3>Our Values</h3>
          <ul>
            <li>Accessibility</li>
            <li>Convenience</li>
            <li>Professionalism</li>
            <li>Empathy</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-4">
    <div class="container text-center">
      <p>&copy; 2024 MentalHelp PH. All rights reserved.</p>
    </div>
  </footer>

<?php
require './assets/js/bootstrap.php';
?>
</body>
</html>