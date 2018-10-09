<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Acme, Inc.</title>
        <link rel="stylesheet" media="screen" href="acme/css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>
            </header>
            <main>
                <h1>Welcome to Acme!</h1>
                <section>
                    <img src="acme/images/site/rocketfeature.jpg" alt="Image of coyote riding a rocket.">
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
                                    <a href="acme/cart/"><img id="actionbtn" alt="Add to cart button" src="acme/images/site/iwantit.gif"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="bottom-bar">
                    <h6 class="invisible">Bottom Bar</h6>
                    <section class="reviews">
                        <h3>Reviews</h3>
                        <ul>
                            <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
                            <li>"That thing was fast!" (4/5)</li>
                            <li>"Talk about fast delivery." (5/5)</li>
                            <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
                            <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
                        </ul>
                    </section>

                    <section class="recipes">
                        <h3>Featured</h3>
                        <h3>Recipes</h3>
                        <div class="grid-cell">
                            <img src="acme/images/recipes/bbqsand.jpg" alt="Pulled Roadrunner BBW">
                            <a href="#">Pulled Roadrunner BBQ</a>

                        </div>
                        <div class="grid-cell">
                            <img src="acme/images/recipes/potpie.jpg" alt="Roadrunner Pot Pie">
                            <a href="#">Roadrunner Pot Pie</a>

                        </div>
                        <div class="grid-cell">
                            <img src="acme/images/recipes/soup.jpg" alt="Roadrunner Soup">
                            <a href="#">Roadrunner Soup</a>
                        </div>
                        <div class="grid-cell">
                            <img src="acme/images/recipes/taco.jpg" alt="Roadrunner Tacos">
                            <a href="#">Roadrunner Tacos</a>

                        </div>
                    </section>
                </section>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
                <p>Last Updated&#58; 24 September&#44; 2018</p>
            </footer>
        </div>
    </body>
</html>