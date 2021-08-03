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
            <button class="icon" onclick="dropdown();">
                <img src="https://d1qmdf3vop2l07.cloudfront.net/chartreuse-pig.cloudvent.net/hash-store/cc6de870e68a487e3750ef53cd15ae3f.png" height="42px" width="49px" data-cms-original-src="Menu_Bar-512.png"/>
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
        <div class="nav-container">
            <a href="index.php">
                <img class="navbar-brand-logo" src="../assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png">
                <div class="nav-container-text">
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
    <!--
    <div class="classes-container">
        <div class="classes-card">
            <div class="classes-box">
                <img class="classes-img" src="../lms_system/classroom.png">
                <h2 class="classes-text">Class One</h2>
            </div>
        </div>
        <div class="classes-card">
            <div class="classes-box">
                <h2 class="classes-text">Class Two</h2>
            </div>
        </div>
    </div>

    <div class="test">
        <button class="classes-plus-icon" onclick="openForm()">+</button>
    </div>
    <div class="form-popup" id="addClass">
        <form action="/classes.php" class="form-container">
            <label for="psw"><b>Invite Code</b></label>
            <input type="text" placeholder="Enter class code" name="classCode" required>

            <button type="submit" class="btn">Enter</button>
            <button class="btn cancel" onclick="closeForm()">✖</button>
        </form>
    </div>
    -->
</body>

<script>
function openForm() {
    document.getElementById("addClass").style.display = "block";
}

function closeForm() {
    document.getElementById("addClass").style.display = "none";
}
    
    
var dropdownTrue = true;

function one() {
   document.getElementById("dropdown-content").style.display = "block";
}

function two() {
   document.getElementById("dropdown-content").style.display = "none";
}

function dropdown(){
   if(dropdownTrue) one();
  else two();
  dropdownTrue = !dropdownTrue;
}
</script>
    
</html>