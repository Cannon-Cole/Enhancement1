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
$increment = 1;

$catList = '<select name="categoryId" form="new-product">';
foreach ($categories as $category) {
    $catList .= "<option value='" . $increment . "'>" . $category['categoryName'] . "</option>";
    $increment++;
}
$catList .= '<select>';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
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
            $message = '<p>Please provide a category to add.</p>';
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
        break;
    case 'insertProduct':
        //invName, invDescription, invImage, invThumbnail, invPrice, invStock, invSize, invWeight, 
        // invLocation, categoryId, invVendor, invStyle
        // Filter and store the data
        $invName = filter_input(INPUT_POST, 'invName');
        $invDescription = filter_input(INPUT_POST, 'invDescription');
        $invImage = filter_input(INPUT_POST, 'invImage');
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
        $invPrice = filter_input(INPUT_POST, 'invPrice');
        $invStock = filter_input(INPUT_POST, 'invStock');
        $invSize = filter_input(INPUT_POST, 'invSize');
        $invWeight = filter_input(INPUT_POST, 'invWeight');
        $invLocation = filter_input(INPUT_POST, 'invLocation');
        $categoryId = filter_input(INPUT_POST, 'categoryId');
        $invVendor = filter_input(INPUT_POST, 'invVendor');
        $invStyle = filter_input(INPUT_POST, 'invStyle');
        if (empty($invName) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invSize) || empty($invWeight) || empty($invLocation) || empty($categoryId) || empty($invVendor) || empty($invStyle)) {
            $message = '<p>Please make sure all fields have a value.</p>';
            include '../view/new-product.php';
            exit;
        }
        // Send the data to the model
        $regOutcome = addNewProduct($invName, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invSize, $invWeight, $invLocation, $categoryId, $invVendor, $invStyle);
        // Check and report the result
        if ($regOutcome === 1) {
            $message = "<p>Category added.</p>";
            include '../view/new-product.php';
            exit;
        } else {
            $message = "<p>Category add failed</p>";
            include '../view/new-product.php';
            exit;
        }
        break;

    default:
        include '../view/product-management.php';
}