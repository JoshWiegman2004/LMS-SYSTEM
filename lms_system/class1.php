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
                <img src="https://d1qmdf3vop2l07.cloudfront.net/chartreuse-pig.cloudvent.net/hash-store/cc6de870e68a487e3750ef53cd15ae3f.png" height="42px" width="49px" data-cms-original-src="Menu_Bar-512.png" alt="Hamburger button to open dropdown navbar"/>
            </button>
            <button class="hideNav" id="hideNav" onclick="dropdown();">
                <img src="unnamed.png" height="45px" width="45px" alt="Cross button to close dropdown navbar"/>
            </button>
            <!--Dropdown Content. This will be hidden until the Hamburger Button is hovered over.-->
            <div class="dropdownContent" id="dropdownContent"> 
                <a href="classes.php">My Classes</a>
                <a href="class1.php" class="active">Class One</a>
                <a href="class2.php">Class Two</a>
                <a href="class3.php">Class Three</a>
                <a href="class4.php">Class Four</a>
            </div>
        </div>
        <div class="navLogo">
            <a href="index.php">
                <img class="logoImage" src="../assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png" alt="Techwise Logo">
                <div class="navLogoText">
                    TechWise
                    <h5>TeacherPortal</h5>
                </div>
            </a>
        </div>
        <div class="textlinks">
            <a href="classes.php">My Classes</a>
            <a href="class1.php" class="active">Class One</a>
            <a href="class2.php">Class Two</a>
            <a href="class3.php">Class Three</a>
            <a href="class4.php">Class Four</a>
         </div>
    </nav>
</head>

<body>
 
<div class="banner">   
    <div class="banner1">
        <div class="bannerContent1"></div>
        <h1>Class One</h1>
    </div>
</div>
    
<div class="filter">
    <a href="#" id="tasks" onclick="tasks();">Tasks <img src="img/black-circle-close-button-png-5.png" id="taskBtn" alt="Cross button to filter out task posts"></a>
    <a href="#" id="announcements" onclick="announcements();">Announcements <img src="img/black-circle-close-button-png-5.png" id="annBtn" alt="Cross button to filter out announcement posts"></a>
    
    
    <?php
    $sort = "dueNew";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $sort = test_input($_POST["sort"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

    <div class="sorting">
        <form class="sort" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="sort">Sort By:</label>
            <select name="sort" id="sort">
                <option id="dueNew" value="dueNew">Date Due (Newest to Oldest)</option>
                <option id="dueOld" value="dueOld">Date Due (Oldest to Newest)</option>
                <option id="assignNew" value="assignNew">Date Assigned(Newest to Oldest)</option>
                <option id="assignOld" value="assignOld">Date Assigned(Oldest to Newest)</option>
            </select>
            <input type="submit">
        </form>
    </div>
</div>
  
<div class="stream">
    <div class="post" id="task">
        <h1 id="taskTitle1">Task</h1>
        <div class="date">
            <div class="left" id="assign1">Assigned: 12th Oct</div>
            <div class="right" id="due1">Due: 24th Oct</div></div>
        <button id="postBtn1" onclick="complete1();" title="Mark as Complete">✖</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
    <div class="post" id="announcement">
        <h1 id="taskTitle2">Announcement</h1>
        <div class="date">
            <div class="left" id="assign2">Posted: 16th Oct</div>
            <div class="right" id="due2"></div></div>
        <button id="postBtn2" onclick="complete2();">✖</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
    <div class="post" id="task2">
        <h1 id="taskTitle3">Task</h1>
        <div class="date">
            <div class="left" id="assign3">Assigned: 22nd Oct</div>
            <div class="right" id="due3">Due: 28th Oct</div></div>
        <button id="postBtn3" onclick="complete3();">✖</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
</div>
</body>

<footer>
    <div class="footer">
        <p><a href="https://www.shutterstock.com/g/mushan">mushan</a>, “Kowhaiwhai Patterns”, via <a href="https://www.shutterstock.com/image-vector/kowhaiwhai-patterns-151532972">www.shutterstock.com</a></p>
        <br>
        <p><a href="https://www.shutterstock.com/g/beccatiana">Rebecca_Tiana</a>, “Kowhai Flower Seamless Pattern, New Zealand Spring Flower”, via <a href="https://www.shutterstock.com/image-vector/kowhai-flower-seamless-pattern-new-zealand-2009683892">www.shutterstock.com</a></p>
        <br>
        <p><a href="https://www.shutterstock.com/g/LosAngeles">Los Angeles</a>, “Green fern leaves seamless pattern”, via <a href="https://www.shutterstock.com/image-vector/green-fern-leaves-seamless-pattern-vector-506313004">www.shutterstock.com</a></p>
        <br>
        <p><a href="https://www.shutterstock.com/g/sakchai0023">Sakchai.K</a>, “new zealand flag, seamless pattern. vector background”, via <a href="https://www.shutterstock.com/image-vector/new-zealand-flag-seamless-pattern-vector-1901976118">www.shutterstock.com</a></p>
    </div>
</footer>

<script>
var sort = <?php echo json_encode($sort, JSON_HEX_TAG); ?>;

switch (sort){
    case 'dueNew':
        document.getElementById("taskTitle1").innerHTML = 'Task';
        document.getElementById("assign1").innerHTML = 'Assigned: 22nd Oct';
        document.getElementById("due1").innerHTML = 'Due: 28th Oct';
        document.getElementById("taskTitle2").innerHTML = 'Task';
        document.getElementById("assign2").innerHTML = 'Assigned: 12th Oct';
        document.getElementById("due2").innerHTML = 'Due: 24th Oct';
        document.getElementById("taskTitle3").innerHTML = 'Announcement';
        document.getElementById("assign3").innerHTML = 'Posted: 16th Oct';
        document.getElementById("due3").innerHTML = ''; 
        document.getElementById("dueNew").selected = true;
        break;
    case 'dueOld':
        document.getElementById("taskTitle1").innerHTML = 'Announcement';
        document.getElementById("assign1").innerHTML = 'Posted: 16th Oct';
        document.getElementById("due1").innerHTML = '';
        document.getElementById("taskTitle2").innerHTML = 'Task';
        document.getElementById("assign2").innerHTML = 'Assigned: 12th Oct';
        document.getElementById("due2").innerHTML = 'Due: 24th Oct';
        document.getElementById("taskTitle3").innerHTML = 'Task';
        document.getElementById("assign3").innerHTML = 'Assigned: 22nd Oct';
        document.getElementById("due3").innerHTML = 'Due: 28th Oct'; 
        document.getElementById("dueOld").selected = true;
        break;
    case 'assignNew':
        document.getElementById("taskTitle1").innerHTML = 'Task';
        document.getElementById("assign1").innerHTML = 'Assigned: 12th Oct';       document.getElementById("due1").innerHTML = 'Due: 24th Oct';
        document.getElementById("taskTitle2").innerHTML = 'Announcement';
        document.getElementById("assign2").innerHTML = 'Posted: 16th Oct';
        document.getElementById("due2").innerHTML = '';
        document.getElementById("taskTitle3").innerHTML = 'Task';
        document.getElementById("assign3").innerHTML = 'Assigned: 22nd Oct';
        document.getElementById("due3").innerHTML = 'Due: 28th Oct';
        document.getElementById("assignNew").selected = true;
        break;
    case 'assignOld':
        document.getElementById("taskTitle1").innerHTML = 'Task';
        document.getElementById("assign1").innerHTML = 'Assigned: 22nd Oct';       document.getElementById("due1").innerHTML = 'Due: 28th Oct';
        document.getElementById("taskTitle2").innerHTML = 'Announcement';
        document.getElementById("assign2").innerHTML = 'Posted: 16th Oct';
        document.getElementById("due2").innerHTML = '';
        document.getElementById("taskTitle3").innerHTML = 'Task';
        document.getElementById("assign3").innerHTML = 'Assigned: 12th Oct';
        document.getElementById("due3").innerHTML = 'Due: 24th Oct';
        document.getElementById("assignOld").selected = true;
        break;
}
    
var buttonTrue = true;
    
function complete1show(){
    document.getElementById("postBtn1").innerHTML = '✓';
    document.getElementById("postBtn1").style.background = "#2ECC71"
}
function complete1hide(){
    document.getElementById("postBtn1").innerHTML = '✖';
    document.getElementById("postBtn1").style.background = "#eee"
}

function complete2show(){
    document.getElementById("postBtn2").innerHTML = '✓';
    document.getElementById("postBtn2").style.background = "#2ECC71"
}
function complete2hide(){
    document.getElementById("postBtn2").innerHTML = '✖';
    document.getElementById("postBtn2").style.background = "#eee"
}
    
function complete3show(){
    document.getElementById("postBtn3").innerHTML = '✓';
    document.getElementById("postBtn3").style.background = "#2ECC71"
}
function complete3hide(){
    document.getElementById("postBtn3").innerHTML = '✖';
    document.getElementById("postBtn3").style.background = "#eee"
}
    
    
function complete1(){
   if(buttonTrue) complete1show();
  else complete1hide();
  buttonTrue = !buttonTrue;
}
function complete2(){
   if(buttonTrue) complete2show();
  else complete2hide();
  buttonTrue = !buttonTrue;
}    
function complete3(){
   if(buttonTrue) complete3show();
  else complete3hide();
  buttonTrue = !buttonTrue;
} 
    
var filterTrue = true;
    
function tasksClicked(){
    document.getElementById("tasks").style.background = "rgba(0, 0, 0, 0.2)";
    document.getElementById("tasks").style.cursor = "pointer";
    document.getElementById("task").style.display = "none";
    document.getElementById("task2").style.display = "none";
    document.getElementById("taskBtn").style.display = "none";
}
function tasksNotClicked(){
    document.getElementById("tasks").style.background = "#fff";
    document.getElementById("task").style.display = "block";
    document.getElementById("task2").style.display = "block";
    document.getElementById("taskBtn").style.display = "inline-block";
}

function announcementsClicked(){
    document.getElementById("announcements").style.background = "rgba(0, 0, 0, 0.2)";
    document.getElementById("announcements").style.cursor = "pointer";
    document.getElementById("announcement").style.display = "none";
    document.getElementById("annBtn").style.display = "none";
}
function announcementsNotClicked(){
    document.getElementById("announcements").style.background = "#fff";
    document.getElementById("announcement").style.display = "block";
    document.getElementById("annBtn").style.display = "inline-block";
}
    
function announcements(){
   if(filterTrue) announcementsClicked();
  else announcementsNotClicked();
  filterTrue = !filterTrue;
} 
function tasks(){
   if(filterTrue) tasksClicked();
  else tasksNotClicked();
  filterTrue = !filterTrue;
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