<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Classes - Techwise</title>
    <meta name="description" content="Video tutorials for those who need them. Set up all kinds of social media and video chatting programs through easy video tutorials! ">
    <link rel="icon" type="image/png" sizes="16x8" href="assets/img/rsz_2326b559-520a-4bff-ad0c-f585ab4b1ddc_1.png">
    <link rel="icon" type="image/png" sizes="32x18" href="assets/img/rsz_2326b559-520a-4bff-ad0c-f585ab4b1ddc.png">
    <link rel="icon" type="image/png" sizes="1025x575" href="assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png">
    <link rel="icon" type="image/png" sizes="1025x575" href="assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png">
    <link rel="icon" type="image/png" sizes="1025x575" href="assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png">
    <link rel="stylesheet" href="../assets/css/classes.css">
    
    <nav class="navbar" id="myNavbar">
        <div class="dropdown">
            <button class="show-nav" id="show-nav" onclick="dropdown();">
                <img src="https://d1qmdf3vop2l07.cloudfront.net/chartreuse-pig.cloudvent.net/hash-store/cc6de870e68a487e3750ef53cd15ae3f.png" height="42px" width="49px" data-cms-original-src="Menu_Bar-512.png"/>
            </button>
            <button class="hide-nav" id="hide-nav" onclick="dropdown();">
                <img src="unnamed.png" height="45px" width="45px"/>
            </button>
            <!--Dropdown Content. This will be hidden until the Hamburger Button is hovered over.-->
            <div class="dropdown-content" id="dropdown-content"> 
                <a href="classes.php" class="active">My Classes</a>
                <a href="#">Class One</a>
                <a href="#">Class Two</a>
                <a href="#">Class Three</a>
                <a href="#">Class Four</a>
            </div>
        </div>
        <div class="nav-logo">
            <a href="index.php">
                <img class="logo-image" src="../assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png">
                <div class="nav-logo-text">
                    TechWise
                    <h5>TeacherPortal</h5>
                </div>
            </a>
        </div>
        <div class="textlinks">
            <a href="classes.php" class="active">My Classes</a>
            <a href="#">Class One</a>
            <a href="#">Class Two</a>
            <a href="#">Class Three</a>
            <a href="#">Class Four</a>
         </div>
    </nav>
</head>

<body>
    <div class="content" onclick="closeForm()">
        <div class="classes-container-one">
            <a class="classes-card" href="classone.php">
                <div class="class-banner-one">
                    <!--<button class="delete-class">✖</button>-->
                    <div class="banner-img"></div>
                </div>
                <h2 class="classes-text">Class One</h2>
                <!--<h4 class="classes-subtext">Click here to access this class</h4>-->

            </a>
            <a class="classes-card" href="#">
                <div class="class-banner-two">
                    <div class="banner-img"></div>
                </div>
                <h2 class="classes-text">Class Two</h2>
            </a>
        </div>
        <div class="classes-container-two">
            <a class="classes-card" href="#">
                <div class="class-banner-three">
                    <div class="banner-img"></div>
                </div>
                <h2 class="classes-text">Class Three</h2>
            </a>
            <a class="classes-card" href="#">
                <div class="class-banner-four">
                    <div class="banner-img"></div>
                </div>
                <h2 class="classes-text">Class Four</h2>
            </a>
        </div>
    </div>
    
    <button class="classes-plus-icon" id="add-class-button" onclick="openForm()">+</button>
    
    <div class="form-popup" id="addClass">
        <form action="/classes.php" class="form-container" id="form" autocomplete="off">
            <label for="psw"><b>Invite Code</b></label>
            <br>
            <input type="text" placeholder="Enter class code" name="classCode" required>
            <button type="submit" class="form-button">Enter</button>
            <button class="form-button cancel" onclick="closeForm()">✖</button>
        </form>
    </div>

</body>

<script>
function openForm() {
    document.getElementById("addClass").style.display = "block";
    document.getElementById("add-class-button").style.display = "none";
}

function closeForm() {
    document.getElementById("form").reset();
    document.getElementById("addClass").style.display = "none";
    document.getElementById("add-class-button").style.display = "block";
}
    
var dropdownTrue = true;

function one() {
    document.getElementById("myNavbar").style.height = "360px";
    document.getElementById("show-nav").style.display = "none";
    document.getElementById("hide-nav").style.display = "block";
    setTimeout(function(){
        document.getElementById("dropdown-content").style.display = "block";
    }, 250);
        
}

function two() {
    document.getElementById("dropdown-content").style.display = "none";
    document.getElementById("myNavbar").style.height = "100px";
    document.getElementById("show-nav").style.display = "block";
    document.getElementById("hide-nav").style.display = "none";
}

function dropdown(){
   if(dropdownTrue) one();
  else two();
  dropdownTrue = !dropdownTrue;
}

</script>
    
</html>