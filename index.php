<?php
// Create or access a Session
session_start();
 
require_once 'acme/library/connections.php';
// Get the acme model for use as needed
require_once 'acme/model/acme-model.php';
// Get the acme model for use as needed
require_once 'acme/model/products-model.php';
// Get the functions library
require_once 'acme/library/functions.php';

$navList = buildNav(getCategories());

$_SESSION['featured'] = getFeatured();

// Check if the firstname cookie exists, get its value
if(isset($_COOKIE['firstname'])){
 $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
}

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'something':
        break;
    
    default:
        include 'acme/view/home.php';
}