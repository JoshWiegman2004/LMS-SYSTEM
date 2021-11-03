<!DOCTYPE html>
<html lang="en">

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
            <button class="showNav" id="showNav" onclick="dropdown();">
                <img src="https://d1qmdf3vop2l07.cloudfront.net/chartreuse-pig.cloudvent.net/hash-store/cc6de870e68a487e3750ef53cd15ae3f.png" height="42px" width="49px" data-cms-original-src="Menu_Bar-512.png"/>
            </button>
            <button class="hideNav" id="hideNav" onclick="dropdown();">
                <img src="unnamed.png" height="45px" width="45px"/>
            </button>
            <!--Dropdown Content. This will be hidden until the Hamburger Button is hovered over.-->
            <div class="dropdownContent" id="dropdownContent"> 
                <a href="classes.php" class="active">My Classes</a>
                <a href="class1.php">Class One</a>
                <a href="class2.php">Class Two</a>
                <a href="class3.php">Class Three</a>
                <a href="class4.php">Class Four</a>
            </div>
        </div>
        <div class="navLogo">
            <a href="index.php">
                <img class="logoImage" src="../assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png">
                <div class="navLogoText">
                    TechWise
                    <h5>TeacherPortal</h5>
                </div>
            </a>
        </div>
        <div class="textlinks">
            <a href="classes.php" class="active">My Classes</a>
            <a href="class1.php">Class One</a>
            <a href="class2.php">Class Two</a>
            <a href="class3.php">Class Three</a>
            <a href="class4.php">Class Four</a>
         </div>
    </nav>
</head>

<body>
    <div class="content" onclick="closeForm()">
        <div class="classesContainer1">
            <a class="classesCard" href="class1.php">
                <div class="classBanner1">
                    <div class="bannerImg"></div>
                </div>
                <h2 class="classesText">Class One</h2>
                <!--<h4 class="classes-subtext">Click here to access this class</h4>-->

            </a>
            <a class="classesCard" href="class2.php">
                <div class="classBanner2">
                    <div class="bannerImg"></div>
                </div>
                <h2 class="classesText">Class Two</h2>
            </a>
        </div>
        <div class="classesContainer2">
            <a class="classesCard" href="class3.php">
                <div class="classBanner3">
                    <div class="bannerImg"></div>
                </div>
                <h2 class="classesText">Class Three</h2>
            </a>
            <a class="classesCard" href="class4.php">
                <div class="classBanner4">
                    <div class="bannerImg"></div>
                </div>
                <h2 class="classesText">Class Four</h2>
            </a>
        </div>
    </div>
    
    <button class="classesPlusIcon" id="addClassButton" onclick="openForm()">+</button>
    
    <div class="formPopup" id="addClass">
        <form action="/classes.php" class="formContainer" id="form" autocomplete="off">
            <label for="psw"><b>Invite Code</b></label>
            <br>
            <input type="text" placeholder="Enter class code" name="classCode" required>
            <button type="submit" class="formButton">Enter</button>
            <button class="formButton cancel" onclick="closeForm()">✖</button>
        </form>
    </div>
</body>
    
<script>
function openForm() {
    document.getElementById("addClass").style.display = "block";
    document.getElementById("addClassButton").style.display = "none";
}
function closeForm() {
    document.getElementById("form").reset();
    document.getElementById("addClass").style.display = "none";
    document.getElementById("addClassButton").style.display = "block";
}
    
var dropdownTrue = true;

function one() {
    document.getElementById("myNavbar").style.height = "360px";
    document.getElementById("showNav").style.display = "none";
    document.getElementById("hideNav").style.display = "block";
    setTimeout(function(){
        document.getElementById("dropdownContent").style.display = "block";
    }, 250);    
}
function two() {
    document.getElementById("dropdownContent").style.display = "none";
    document.getElementById("myNavbar").style.height = "100px";
    document.getElementById("showNav").style.display = "block";
    document.getElementById("hideNav").style.display = "none";
}

function dropdown(){
   if(dropdownTrue) one();
  else two();
  dropdownTrue = !dropdownTrue;
}
</script>
</html>