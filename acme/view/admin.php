<?php
if (!isset($_SESSION) || $_SESSION['loggedin'] == false) {
    header("../index.php");
}
?>
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
                <h1><?php
                    echo $_SESSION["clientData"]['clientFirstname'];
                    echo ' ';
                    echo $_SESSION["clientData"]['clientLastname'];
                    ?></h1>
                <ul>
                    <li><?php echo 'First Name: ' . $_SESSION["clientData"]['clientFirstname']; ?></li>
                    <li><?php echo 'Last Name: ' . $_SESSION["clientData"]['clientLastname']; ?></li>
                    <li><?php echo 'Email: ' . $_SESSION["clientData"]['clientEmail']; ?></li>
                    <li><?php echo 'Level: ' . $_SESSION["clientData"]['clientLevel']; ?></li>
                </ul> 
<?php if ($_SESSION["clientData"]['clientLevel'] > 1) echo '<a href="/acme/products" title="My Account">Manage Products</a>'; ?>
            </main>
            <footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
                <p>Last Updated&#58; 24 September&#44; 2018</p>
            </footer>
        </div>
    </body>
</html>