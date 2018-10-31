<?php

//products controller
require_once '../library/connections.php';
// Get the acme model for use as needed
require_once '../model/acme-model.php';
// Get the products model
require_once '../model/products-model.php';
// Get the functions library
require_once '../library/functions.php';

$navList = buildNav(getCategories());

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
        $categoryName = filter_input(INPUT_POST, 'categoryName', FILTER_SANITIZE_STRING);

        if (empty($categoryName)) {
            $message = '<p>Please provide a category to add.</p>';
            include '../view/new-category.php';
            exit;
        }

        // Send the data to the model
        $regOutcome = addNewCategory($categoryName);

        // Check and report the result
        if ($regOutcome === 1) {
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
        $invName = filter_input(INPUT_POST, 'invName', FILTER_SANITIZE_STRING);
        $invDescription = filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_STRING);
        $invImage = filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_STRING);
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail', FILTER_SANITIZE_STRING);
        $invPrice = filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_STRING, FILTER_FLAG_ALLOW_FRACTION);
        $invStock = filter_input(INPUT_POST, 'invStock', FILTER_SANITIZE_STRING);
        $invSize = filter_input(INPUT_POST, 'invSize', FILTER_SANITIZE_STRING);
        $invWeight = filter_input(INPUT_POST, 'invWeight', FILTER_SANITIZE_STRING);
        $invLocation = filter_input(INPUT_POST, 'invLocation', FILTER_SANITIZE_STRING);
        $categoryId = filter_input(INPUT_POST, 'categoryId', FILTER_SANITIZE_STRING);
        $catType = $categoryId;
        $invVendor = filter_input(INPUT_POST, 'invVendor', FILTER_SANITIZE_STRING);
        $invStyle = filter_input(INPUT_POST, 'invStyle', FILTER_SANITIZE_STRING);

        if (empty($invName) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invSize) || empty($invWeight) || empty($invLocation) || empty($categoryId) || empty($invVendor) || empty($invStyle)) {
            if (isset($categoryId)) {
                if ($categoryId == 0) {
                    $message = '<p>Please make a category is selected.</p>';
                } else {
                    $message = '<p>Please make sure all fields have a value.</p>';
                }
            }

            include '../view/new-product.php';
            exit;
        }

        if ($categoryId == 0) {
            $message = '<p>Please make the category is selected.</p>';
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