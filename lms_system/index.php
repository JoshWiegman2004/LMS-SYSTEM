<!DOCTYPE html>
<html>
    <head>
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/img/favicons/site.webmanifest">
        <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#000000">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
<body style="background-color: rgb(0,0,0);">
<?php include "header.php";?>
    <main class="about-us-back" style="background-image: url(&quot;assets/img/about-us.jpg&quot;);background-position: bottom;">
        <section class="clean-block clean-hero" style="background-image: url(&quot;assets/img/home-office-569359_1920.jpg&quot;);color: rgba(0,106,170,0.85);filter: brightness(97%) contrast(101%) saturate(90%);height: 950px;background-position: center;">
            <div class="text">
                <h1>Learning Management System</h1>
                <p>Let us guide you through the ways of the internet, through simple video tutorials. No payment needed. Easy.</p><a class="btn btn-outline-light btn-lg" role="button" href="pricing.php">Learn More</a></div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>Whether it's basics or you're getting to the next level. Whether it's a phone or PC. Doesn't matter what it is, what level you're at, we've got you covered.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/scenery/image5.png"></div>
                    <div class="col-md-6">
                        <h3>No Price, All Features.</h3>
                        <div class="getting-started-info">
                            <p>With our new program you don't have to worry about price, because there is none. Nothing. For free. You don't see that much these days, enjoy our premium tutorials for free.</p>
                        </div><a class="btn btn-outline-primary btn-lg" role="button" href="tutorials.php">Get Started</a></div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">What we do</h2>
                    <p>All we do is try to get you online, fast and for free. We limit costs by staying local, let's unite through the internet New Zealand! Our services include call technical support, PC building and of course our gallery of tutorials right here on our website!</p>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox" data-bs-hover-animate="pulse">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/gpu.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/app.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/office.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        
        <style>
        .about-us-header {
            color: white;
        }
        .a-about-us {
            color: white;
            text-decoration: underline;
        }
        @media only screen and (max-width: 1200px) {
            .justify-content-center {
                visibility: hidden;
            }
            .about-us {
                padding-top: 200px;
                height: 600px;
            }
        }
        </style>
        
        <section class="clean-block about-us" style="height: 1000px;">
            <div class="container" style="color: rgb(0,0,0);">
                <div class="block-heading" style="color: rgb(255,255,255);">
                    <h2 class="about-us-header">About Us</h2>
                    <p>Who are we? Just a few students trying to help the wider community out. We want to make sure people stay connected through the internet in a world where technology is shaping the future. Check out the <a class="a-about-us" href="about-us.php">about us</a> page!</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/charlie.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Charlie O'Connell</h4>
                                <p class="card-text">Co-Founder of techwise.co.nz, our front-end web developer. Always wants to experiment with the latest features of the code, sometimes we have to hold him back! </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/josh.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Josh Wiegman</h4>
                                <p class="card-text">Founder of Code'M Enterprise, interested in Computer Science, Information Technologies and back-end server work. You'll be in contact with me when you want a PC built.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/ana.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Ana Souto</h4>
                                <p class="card-text">Co-founder of TechWise, main design and the one that selects the appropriate images for the site. She sure can talk a lot!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
   <?php
    include ("footer.php")
    ?>
</body>

</html>