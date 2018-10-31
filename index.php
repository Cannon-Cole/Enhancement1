<?php

require_once 'acme/library/connections.php';
// Get the acme model for use as needed
require_once 'acme/model/acme-model.php';
// Get the functions library
require_once 'acme/library/functions.php';

$navList = buildNav(getCategories());

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