<?php
require_once 'connection/DatabaseConnection.php';

function admin_login($email, $password)
{
    return $email == 'admin@gmail.com' && $password == 'admin';
}
