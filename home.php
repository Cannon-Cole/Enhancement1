<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0;   user-scalable=0;">
        <title>Home | Acme, Inc.</title>
        <link rel="stylesheet" media="screen" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'; ?>
            </header>
            <main>
                <h1>Welcome to Acme!</h1>
                <section>
                    <img src="images/site/rocketfeature.jpg" alt="Image of coyote riding a rocket.">
                    <div class="test">
                        <div class="call-to-action">
                            <ul>
                                <li>
                                    <h2>Acme Rocket</h2>
                                </li>
                                <li>Quick lighting fuse</li>
                                <li>NHTSA approved seat belts</li>
                                <li>Mobile launch stand included</li>
                                <li>
                                    <a href="acme/cart/"><img id="actionbtn" alt="Add to cart button" src="images/site/iwantit.gif"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="bottom-bar">
                    <section class="recipes">
                        <div>
                            <img src="images/recipes/bbqsand.jpg" alt="Pulled Roadrunner BBW">
                            <a href="#">Pulled Roadrunner BBQ</a>

                        </div>
                        <div>
                            <img src="images/recipes/potpie.jpg" alt="Roadrunner Pot Pie">
                            <a href="#">Roadrunner Pot Pie</a>

                        </div>
                        <div>
                            <img src="images/recipes/soup.jpg" alt="Roadrunner Soup"></div>
                        <a href="#">Roadrunner Soup</a>

                        <div>
                            <img src="images/recipes/taco.jpg" alt="Roadrunner Tacos">
                            <a href="#">Roadrunner Tacos</a>

                        </div>
                    </section>

                    <section class="reviews">
                        <ul>
                            <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
                            <li>"That thing was fast!" (4/5)</li>
                            <li>"Talk about fast delivery." (5/5)</li>
                            <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
                            <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
                        </ul>
                    </section>
                </section>
            </main>
        </div>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'; ?>
            <p>Last Updated&#58; 24 September&#44; 2018</p>
        </footer>
    </div>
</body>
</html>