<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Acme, Inc.</title>
        <link rel="stylesheet" media="screen" href="../css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>
            </header>
            <main>
                <div class="content-wrapper">
                    <p>All fields required</p>
                    <?php
                    if (isset($message)) {
                        echo $message;
                    }
                    ?>
                    Category<br>
                    <?php echo $catList; ?><br>    
                    <form method="post" id="new-product" action="/acme/products/index.php">
                        Name
                        <input type="text" name="invName" id="invName" placeholder="Name">
                        Description
                        <input type="text" name="invDescription" id="invDescription" placeholder="Description">
                        Image path
                        <input type="text" name="invImage" id="invImage" placeholder="Image path">
                        Thumbnail path
                        <input type="text" name="invThumbnail" id="invThumbnail" placeholder="Thumbnail path">
                        Price
                        <input type="text" name="invPrice" id="invPrice" placeholder="Price">
                        Stock
                        <input type="text" name="invStock" id="invStock" placeholder="Stock">
                        Size
                        <input type="text" name="invSize" id="invSize" placeholder="Size">
                        Weight
                        <input type="text" name="invWeight" id="invWeight" placeholder="Weight">
                        Location
                        <input type="text" name="invLocation" id="invLocation" placeholder="Location">
                        Vendor
                        <input type="text" name="invVendor" id="invVendor" placeholder="Vendor">
                        Style
                        <input type="text" name="invStyle" id="invStyle" placeholder="Style">                      
                        <input type="submit" name="submit" value="Add Product">
                        <!-- Add the action name - value pair -->
                        <input type="hidden" name="action" value="insertProduct">
                    </form>
                </div>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
                <p>Last Updated&#58; 24 September&#44; 2018</p>
            </footer>
        </div>
    </body>
</html>