<?php include('server.php'); include('auth_session.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"><!--Allows the screen to fit mobile devices-->
    <title>Classes - Techwise</title>
    <meta name="description" content="Home page that allows you to view and access all of your classes">
    <link rel="stylesheet" href="../assets/css/classes.css">
</head>
    
<nav class="navbar" id="myNavbar"><!--All navigation content is in here-->
    <div class="dropdown">
        <button class="showNav" id="showNav" onclick="dropdown();"><!--Button that opens dropdown menu-->
            <img src="https://d1qmdf3vop2l07.cloudfront.net/chartreuse-pig.cloudvent.net/hash-store/cc6de870e68a487e3750ef53cd15ae3f.png" height="42px" width="49px" data-cms-original-src="Menu_Bar-512.png" alt="Hamburger button to open dropdown navbar"/>
        </button>
        <button class="hideNav" id="hideNav" onclick="dropdown();"><!--Button that closes dropdown menu-->
            <img src="unnamed.png" height="45px" width="45px" alt="Cross button to close dropdown navbar"/>
        </button>
        <!--Dropdown Content. This will be hidden until the Hamburger Button is hovered over.-->
        <div class="dropdownContent" id="dropdownContent"><!--All dropdown links are contained in here-->
            <a href="classes.php" class="active">My Classes</a><!--Links to each page-->
            <a href="class1.php">Class One</a>
            <a href="class2.php">Class Two</a>
            <a href="class3.php">Class Three</a>
            <a href="class4.php">Class Four</a>
        </div>
    </div>
    <div class="navLogo"><!--Logo that appears in the corner of the navbar-->
        <a href="index.php">
            <img class="logoImage" src="../assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png" alt="Techwise Logo"><!--Logo image-->
            <div class="navLogoText"><!--Logo Text-->
                TechWise
                <h5>TeacherPortal</h5>
            </div>
        </a>
    </div>
    <div class="textlinks"><!--Links to each page-->
        <a href="classes.php" class="active">My Classes</a>
        <a href="class1.php">Class One</a>
        <a href="class2.php">Class Two</a>
        <a href="class3.php">Class Three</a>
        <a href="class4.php">Class Four</a>
        </div>
</nav>
    
<body>
    <div class="content" onclick="closeForm()"><!--This function allows the user to click outside of the "add class" box to close the menu-->
        <div class="classesContainer1"><!--Top row of classes-->
            <a class="classesCard" href="class1.php"><!--Card for Class One-->
                <div class="classBanner1"><!--Bammer for class one card-->
                    <div class="bannerImg"></div>
                </div>
                <h2 class="classesText">Class One</h2>
            </a>
            <a class="classesCard" href="class2.php"><!--Card for Class Two-->
                <div class="classBanner2"><!--Bammer for class two card-->
                    <div class="bannerImg"></div>
                </div>
                <h2 class="classesText">Class Two</h2>
            </a>
        </div>
        <div class="classesContainer2"><!--Bottom row of classes-->
            <a class="classesCard" href="class3.php"><!--Card for Class Three-->
                <div class="classBanner3"><!--Bammer for class three card-->
                    <div class="bannerImg"></div>
                </div>
                <h2 class="classesText">Class Three</h2>
            </a>
            <a class="classesCard" href="class4.php"><!--Card for Class Four-->
                <div class="classBanner4"><!--Bammer for class four card-->
                    <div class="bannerImg"></div>
                </div>
                <h2 class="classesText">Class Four</h2>
            </a>
        </div>
    </div>
    
    <button class="classesPlusIcon" id="addClassButton" onclick="openForm()">+</button><!--Button to open the "add class" form-->
    
    <div class="formPopup" id="addClass"><!--"Add class" form-->
        <form action="/classes.php" class="formContainer" id="form" autocomplete="off">
            <label><b>Invite Code</b></label><!--Title-->
            <br>
            <input type="text" placeholder="Enter class code" name="classCode" required><!--Text box-->
            <button type="submit" class="formButton">Enter</button><!--Enter button-->
            <button class="formButton cancel" onclick="closeForm()">✖</button><!--Close button-->
        </form>
    </div>
</body>

<div class="footer-classes"><!--container for all of the footer links-->
        <p><a href="https://www.shutterstock.com/g/mushan">mushan</a>, “Kowhaiwhai Patterns”, via <a href="https://www.shutterstock.com/image-vector/kowhaiwhai-patterns-151532972">www.shutterstock.com</a></p>
        <br>
        <p><a href="https://www.shutterstock.com/g/beccatiana">Rebecca_Tiana</a>, “Kowhai Flower Seamless Pattern, New Zealand Spring Flower”, via <a href="https://www.shutterstock.com/image-vector/kowhai-flower-seamless-pattern-new-zealand-2009683892">www.shutterstock.com</a></p>
        <br>
        <p><a href="https://www.shutterstock.com/g/LosAngeles">Los Angeles</a>, “Green fern leaves seamless pattern”, via <a href="https://www.shutterstock.com/image-vector/green-fern-leaves-seamless-pattern-vector-506313004">www.shutterstock.com</a></p>
        <br>
        <p><a href="https://www.shutterstock.com/g/sakchai0023">Sakchai.K</a>, “new zealand flag, seamless pattern. vector background”, via <a href="https://www.shutterstock.com/image-vector/new-zealand-flag-seamless-pattern-vector-1901976118">www.shutterstock.com</a></p>
</div>
    
<script>
function openForm() {/*This function opens the "add class" form*/
    document.getElementById("addClass").style.display = "block";
    document.getElementById("addClassButton").style.display = "none";
}
function closeForm() {/*This function closes the "add class" form*/
    document.getElementById("form").reset();/*This deletes whatever text was inside the box*/
    document.getElementById("addClass").style.display = "none";
    document.getElementById("addClassButton").style.display = "block";
}
    

function one() {/*Opens the navigation menu*/
    document.getElementById("myNavbar").style.height = "360px";
    document.getElementById("showNav").style.display = "none";
    document.getElementById("hideNav").style.display = "block";
    setTimeout(function(){/*Delays the time taken for the dropdown menu to open which makes for a smoother transition*/
        document.getElementById("dropdownContent").style.display = "block";
    }, 250);    
}
function two() {/*Closes the navigation menu*/
    document.getElementById("dropdownContent").style.display = "none";
    document.getElementById("myNavbar").style.height = "100px";
    document.getElementById("showNav").style.display = "block";
    document.getElementById("hideNav").style.display = "none";
}
    
var dropdownTrue = true;
function dropdown(){/*Determines whether the dropdown menu will be opened or closed*/
    if(dropdownTrue) one();
    else two();
    dropdownTrue = !dropdownTrue;
}
</script>
</html>