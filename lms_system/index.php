<!DOCTYPE html>

<!-- HEADER -->
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

<div class="loader-wrapper" style="z-index: 2147483647;">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<script>
    $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
    });
</script>

<!-- HEADER ENDS -->
<!-- NAVBAR STARTS -->

<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container">
            <a class="navbar-brand logo" href="index.php" style="margin-right: 100px;">
                <img style="height: 60px;width: 108px;" src="../assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png">&nbsp; 
                <h1 style="font-size: 25px; margin-top: -58px; margin-left: 116px;">TechWise</h1>
                <h5 style="font-size: 16px; margin-left: 118px; margin-top: -12px; font-weight: 700;">LMS Systems</h5>
            </a> 
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
<!-- BACKGROUND -->

<video autoplay muted loop id="VidBack">
  <source src="./img/students-devices.mp4" type="video/mp4"> 
</video>

<div class="slideshow-container">
<div class="main_title">
    <h1 class="title">"So easy to set up and implement in my school!"</h1>
    <h3 class="sub_title">A classroom portal designed to increase student performance and minimize teacher <br> workload.</h3>
</div>

<div class="main_title">
    <h1 class="title">"An incredibly easy system for both staff and students."</h1>
    <h3 class="sub_title">A classroom portal designed to increase student performance and minimize teacher <br> workload.</h3>
</div>

<div class="main_title">
    <h1 class="title">"So many kids love this system, it's fun and interactive!"</h1>
    <h3 class="sub_title">A classroom portal designed to increase student performance and minimize teacher <br> workload.</h3>
</div>

<div class="main_title">
    <h1 class="title">"No matter what device or age, this tool has you sorted."</h1>
    <h3 class="sub_title">A classroom portal designed to increase student performance and minimize teacher <br> workload.</h3>
</div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("main_title");
  var dots =   document.getElementsByClassName("dot");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }

  slideIndex++;
  
  if (slideIndex > slides.length) {slideIndex = 1}

  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>


<!-- BACKGROUND ENDS -->
<!-- BODY STARTS --> 

<body class="body-main">

    <div class="body_main">
        <img class="img-thumbnail" src="img/classroom.png"></img>
        <h2 class="body_title_main">Classroom integration</h2>
        <p class="body_para_main">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non enim commodo, finibus magna vitae, suscipit mi. Donec consectetur ex vel aliquam malesuada. Morbi ac augue laoreet, dignissim est sit amet, sagittis metus. Fusce ullamcorper leo in est congue, vitae consequat tellus tincidunt. Pellentesque pretium pharetra dolor in sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque finibus enim in consequat. Ut viverra quis dui a gravida. Sed urna ante, rhoncus vel aliquam non, tincidunt non purus.</p>
    </div>

    <div class="body_main_2">
        <h2 class="body_title_main_2">Easy Setup</h2>
        <p class="body_para_main">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non enim commodo, finibus magna vitae, suscipit mi. Donec consectetur ex vel aliquam malesuada. Morbi ac augue laoreet, dignissim est sit amet, sagittis metus. Fusce ullamcorper leo in est congue, vitae consequat tellus tincidunt. Pellentesque pretium pharetra dolor in sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque finibus enim in consequat. Ut viverra quis dui a gravida. Sed urna ante, rhoncus vel aliquam non, tincidunt non purus.</p>
    </div>

</body>

<!-- BODY ENDS -->
<!-- FOOTER/LINKS START -->

<?php include('footer.php'); ?>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../assets/js/script.js"></script>
  <script src="../assets/js/script.js"></script>
    
<!-- FOOTER ENDS -->


</html>