<?php

function checkEmail($clientEmail) {
    $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

// Check the password for a minimum of 8 characters,
// at least one 1 capital letter, at least 1 number and
// at least 1 special character
function checkPassword($clientPassword) {
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])[[:print:]]{8,}$/';
    return preg_match($pattern, $clientPassword);
}

function buildNav($categories) {
    $navList = '<ul>';
    $navList .= "<li><a href='/' title='View the Acme home page'>Home</a></li>";
    foreach ($categories as $category) {
        $navList .= "<li><a href='/acme/products/?action=category&categoryName=" . 
                urlencode($category['categoryName']) . 
                "' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
    }
    $navList .= '</ul>';
    
    return $navList;
}

function buildProductsDisplay($products){
 $pd = '<ul id="prod-display">';
 foreach ($products as $product) {
  $pd .= '<li>';
  $pd .= "<a href=\"?action=product-details&invId=$product[invId]\"><img src='$product[invThumbnail]' alt='Image of $product[invName] on Acme.com'></a>";
  $pd .= '<hr>';
  $pd .= "<a class=prod-link href=\"?action=product-details&invId=$product[invId]\"><h2>$product[invName]</h2></a>";
  $pd .= "<span>$product[invPrice]</span>";
  $pd .= '</li>';
 }
 $pd .= '</ul>';
 return $pd;
}

function buildProductDetail($product){
 $pd = '<ul id="prod-detail-display">';
  $pd .= '<li>';
  $pd .= "<img src='$product[invThumbnail]' alt='Image of $product[invName] on Acme.com'>";
  $pd .= "<h2>$product[invName]</h2>";
  $pd .= "<p>$product[invDescription]</p>";
  $pd .= "<span class=red-price>$$product[invPrice]</span>";
  $pd .= '</li>';
 $pd .= '</ul>';
 return $pd;
}