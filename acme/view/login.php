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
                    <h1>Acme Login</h1>

                    <?php
                    if (isset($message)) {
                        echo $message;
                    }
                    ?>
                    
                    <form action="/action_page.php">
                        Email:
                        <input type="email" required name="clientEmail" placeholder="Email"><br>
                        Password: <span class="password-requirements">8 characters and has at least 1 uppercase character, 1 number and 1 special character</span>
                        <input type="password" name="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Password">
                        <input type="submit" value="Login">
                    </form> 
                    <p>Not a member?</p>
                    <a class="register" href="/acme/accounts/?action=registration" title="My Account">Register</a>
                </div>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
                <p>Last Updated&#58; 24 September&#44; 2018</p>
            </footer>
        </div>
    </body>
</html>