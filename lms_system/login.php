<?php include('server.php'); ?>
<!DOCTYPE html>
<html>

<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Techwise LMS</title>
<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
<link rel="manifest" href="../assets/img/favicons/site.webmanifest">
<link rel="mask-icon" href="../assets/img/favicons/safari-pinned-tab.svg" color="#000000">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/dark-mode.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<!-- Loading window -->
<div class="loader-wrapper" style="z-index: 2147483647;">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
<!-- Loading window -->
<script>
    $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
    });
</script>

<body>
    <!-- NAVBAR STARTS -->

<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container">
            <a class="navbar-brand logo" href="index.php" style="margin-right: 100px;">
                <img style="height: 60px;width: 108px;" src="../assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png">&nbsp; 
                <h1 style="font-size: 25px; margin-top: -58px; margin-left: 116px;">TechWise</h1>
                <h5 style="font-size: 16px; margin-left: 118px; margin-top: -12px; font-weight: 700;">LMS Systems</h5>
            </a> 
            <!-- Navigation items -->
            <div></div><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link " href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="classes.php">Classes</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="file-manager.php">Files</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="contact-us.php">Contact</a></li>
                    <button class="nav-item-spec" role="presentation"><a class="nav-link-spec" href="login.php">LOG IN</a></button>
                    <button class="nav-item-spec1" role="presentation"><a class="nav-link-spec" href="register.php">SIGN UP</a></button> 
                </ul>
            </div>
        </div>
    </nav>

<!-- NAVBAR ENDS -->
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Login to get access to our premium content. If you don't have an account yet, <a href="register.php">sign up.</a></p>
                </div>
                <form method="post" action="login.php">
                    <?php include('errors.php'); ?>
                    <div class="form-group"><label for="student_id">Student ID</label><input name="student_id"
                            class="form-control item" type="student_id" id="student_id" required=""></div>
                    <div class="form-group"><label for="email">Email</label><input name="email"
                            class="form-control item" type="email" id="email" required=""></div>
                    <div class="form-group"><label for="password">Password</label><input name="password"
                            class="form-control" type="password" id="password" required=""></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label
                                class="form-check-label" for="checkbox">Remember me</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit" value="login" name="log_user">Log
                        In</button>
                </form>
            </div>
        </section>
    </main>
<!-- FOOTER STARTS -->
    <footer class="page-footer dark footer_main" >
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="register.php">Sign up</a></li>
                        <li><a href="download.php">Downloads</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Social Media</h5>
                    <ul>
                        <li><a href="https://www.facebook.com/CodeMDev/">Facebook</a></li>
                        <li><a href="https://www.instagram.com/codementerprise/">Instagram</a></li>
                        <li><a href="https://techwisenz.blogspot.com/">News</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="about-us.php">Who are we?</a></li>
                        <li><a href="contact-us.php">Contact us</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2021 TechwiseNZ</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
<!-- FOOTER ENDS -->
</body>

</html>