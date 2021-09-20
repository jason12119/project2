<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <meta name="description" content="My first project after a year in VS Code">
    <link rel="stylesheet" href="dist/css/frameworks.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="dist/js/frameworks-min.js"></script>
</head>

<body>

    <div id="header" class="container">
        <div id="header-logo">
            Your Logo
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Servicing</a>
            <a href="#">Blog</a>
            <a href="#">Contact us</a>
        </nav>
    </div>

    <div id="banner" class="container-fluid">
        <div class="overlay-dark"></div>
        <img src="img/nature.jpg" alt="picture of nature with waterfalls">
        <h1>Web development project</h1>
        <p>A simple design suitable for anyone.</p>
        <did class="buttons">
            <a href="#" class="button">Buy this</a>
            <a href="#" class="button green">Buy this later</a>
        </did>
    </div>
    <div id="about" class="container-fluid paddingTB80">
        <div class="container text-center">
            <h2>About</h2>
            <p>Some text about this product which is not really important because all that matters is the banner picture
                which is, in this case, chosen very well, so that means that this product might actually sell really
                well. If you buy it. So do that, please.</p>
            <p>Some text about this product which is not really important because all that matters is the banner picture
                which is, in this case, chosen very well, so that means that this please.</p>
        </div>
    </div>
    <div id="we-do" class="container-fluid bg-green paddingTB80">
        <div class="container text-center">
            <h2>What do we do</h2>
            <p>We create custom sollutions to accommodate our clients needs in the best way possible, here are some of
                our very best clients opinions.</p>


            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/clever.jpg" alt="a client picture">

                        <div class="testimonial">
                            <h3>Josh Warhoof</h3>
                            <div class="perex">CEO of NEEBA</div>
                            <p>I think this product is excellent for people who know exactly what they want to achive.
                                This
                                company will tell you how to do it.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/clever.jpg" alt="a client picture">

                        <div class="testimonial">
                            <h3>Josh Warhoof</h3>
                            <div class="perex">CEO of NEEBA</div>
                            <p>I think this product is excellent for people who know exactly what they want to achive.
                                This
                                company will tell you how to do it.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/clever.jpg" alt="a client picture">

                        <div class="testimonial">
                            <h3>Josh Warhoof</h3>
                            <div class="perex">CEO of NEEBA</div>
                            <p>I think this product is excellent for people who know exactly what they want to achive.
                                This
                                company will tell you how to do it.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div id="contact" class="container-fluid paddingTB80">
        <div class="container text-center">
            <h2>Contact</h2>
            <div class="contact-info">
                <div class="group">
                    <span>Address: Majova 1477 Karlsbad</span>
                    <span>ICO: 6868686</span>
                    <span>DIC: CZ6868686</span>
                    <span>Phone: 777 888 666</span>
                </div>
                <div class="group">
                    <div id="footer-logo">
                        YOUR COMPANY LOGO
                    </div>
                </div>
                <div class="group">
                    <span>Address: Majova 1477 Karlsbad</span>
                    <span>ICO: 6868686</span>
                    <span>DIC: CZ6868686</span>
                    <span>Phone: 777 888 666</span>
                </div>
            </div>
        </div>
    </div>

    <div id="footer" class="container-fluid paddingTB20">
        <div class="container">
            <div class="copyright">
                &#169; Pedro 2021
            </div>
            <div class="company">
                <a href="#">www.nemamweb.cz</a>
            </div>
        </div>
    </div>

    <script src="js/functions.js"></script>
</body>

</html>