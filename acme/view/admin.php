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
                <h2>You are logged in</h2>
                <ul>
                    <li><?php echo 'First Name: ' . $_SESSION["clientData"]['clientFirstname']; ?></li>
                    <li><?php echo 'Last Name: ' . $_SESSION["clientData"]['clientLastname']; ?></li>
                    <li><?php echo 'Email: ' . $_SESSION["clientData"]['clientEmail']; ?></li>
                </ul>
                <?php
                $updateAccountLink = '/acme/accounts/?action=update-account-page&clientId=' . $_SESSION['clientData']['clientId'];
                $updatePasswordLink = '/acme/accounts/?action=update-password-page&clientId=' . $_SESSION['clientData']['clientId'];
                ?>
                <a class="register" href="<?php echo $updateAccountLink ?>" title="Update Account">Update Account</a>
                <a class="register" href="<?php echo $updatePasswordLink ?>" title="Change Password">Change Password</a>
                <?php if ($_SESSION["clientData"]['clientLevel'] > 1){ echo '<a class="register" href="/acme/products" title="My Account">Manage Products</a>';} ?>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
                <p>Last Updated&#58; 24 September&#44; 2018</p>
            </footer>
        </div>
    </body>
</html>