<?php

//products controller


require_once '../library/connections.php';
// Get the acme model for use as needed
require_once '../model/acme-model.php';
// Get the products model
require_once '../model/products-model.php';

// Get the array of categories
$categories = getCategories();

// Build a navigation bar using the $categories array
$navList = '<ul>';
$navList .= "<li><a href='/acme/index.php' title='View the Acme home page'>Home</a></li>";
foreach ($categories as $category) {
    $navList .= "<li><a href='/acme/index.php?action=" . urlencode($category['categoryName']) . "' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
}
$navList .= '</ul>';

//build category

$catList = '<select name=categories>';
foreach ($categories as $category) {
    $catList .= "<option value='" . $category['categoryName'] . "'>" . $category['categoryName'] . "</option>";
}
$catList .= '<select>';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'manage':
        include '../view/product-management.php';
        break;
    case 'addCategory':
        include '../view/new-category.php';
        break;
    case 'addProduct':
        include '../view/new-product.php';
        break;
    case 'insertCategory':
        // Filter and store the data
        $categoryName = filter_input(INPUT_POST, 'categoryName');
        if (empty($categoryName)) {
            $message = '<p>Please provide a category to add.' . $categoryName . '</p>';
            include '../view/new-category.php';
            exit;
        }

        // Send the data to the model
        $regOutcome = addNewCategory($categoryName);

        // Check and report the result
        if ($regOutcome === 1) {
            $message = "<p>Category added.</p>";
            include '../view/new-category.php';
            exit;
        } else {
            $message = "<p>Category add failed</p>";
            include '../view/new-category.php';
            exit;
        }

    default:
        include 'acme/view/home.php';
}