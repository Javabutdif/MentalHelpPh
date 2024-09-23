<?php
    
function navbar($header, $headerlink, $option1, $option2 , $option3) {
    return "
    <nav class='navbar navbar-expand-lg navbar-light bg-light shadow fixed-top'>
        <img src='../../assets/images/logon.png' style='height: 4rem; width: 4rem' class='mx-3' />
        <a class='navbar-brand' style='font-weight: bold' href='$headerlink'>$header</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' style='padding-right: 5rem; font-weight: bold;' id='navbarNav'>
            <ul class='navbar-nav ms-auto'>
             <li class='nav-item active'>
                    <a class='nav-link' href='AdminDashboard.php'>$option1</a>
                </li>
                <li class='nav-item active'>
                    <a class='nav-link' href='$option2.php'>$option2</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='$option3.php'>$option3</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: #ff9999;' href='../../login.php'>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    ";
}
