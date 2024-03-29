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
                <a href="classes.php">My Classes</a>
                <a href="#" class="active">Class One</a>
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
            <a href="classes.php">My Classes</a>
            <a href="#" class="active">Class One</a>
            <a href="#">Class Two</a>
            <a href="#">Class Three</a>
            <a href="#">Class Four</a>
         </div>
    </nav>
</head>

<body>
    
<div class="banner">
    <div class="banner-content"></div>
    <h1>Class One</h1>
</div>
    
<div class="filter">
    <a href="#" id="tasks" onclick="tasks();">Tasks <img src="Images/black-circle-close-button-png-5.png" id="task-btn"></a>
    <a href="#" id="announcements" onclick="announcements();">Announcements <img src="Images/black-circle-close-button-png-5.png" id="ann-btn"></a>
    
    <form class="sort" action="/action_page.php">
        <label for="sort">Sort By:</label>
        <select name="sort" id="sort">
            <option value="due-new">Date Due (Newest to Oldest)</option>
            <option value="due-old">Date Due (Oldest to Newest)</option>
            <option value="assign-new">Date Assigned(Newest to Oldest)</option>
            <option value="assign-old">Date Assigned(Oldest to Newest)</option>
        </select>
        <input type="submit">
    </form>
</div>
  

    
<div class="stream">
    
    
    <div class="post" id="task">
        <h1>Task</h1>
        <div class="date"><div class="left">Assigned: 12th Oct</div><div class="right">Due: 24th Oct</div></div>
        <button id="post-btn-1" onclick="complete1();" title="Mark as Complete">✖</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    
    <div class="post" id="announcement">
        <h1>Announcement</h1>
        <div class="date">Posted: 16th Oct</div>
        <button id="post-btn-2" onclick="complete2();">✖</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    
    <div class="post" id="task2">
        <h1>Task</h1>
        <div class="date">Assigned: 22nd Oct<br>Due: 28th Oct</div>
        <button id="post-btn-3" onclick="complete3();">✖</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
</div>

</body>

<script>
    
var buttonTrue = true;

    
function complete1show(){
    document.getElementById("post-btn-1").innerHTML = '✓';
    document.getElementById("post-btn-1").style.background = "#2ECC71"
}
function complete1hide(){
    document.getElementById("post-btn-1").innerHTML = '✖';
    document.getElementById("post-btn-1").style.background = "#eee"
}

function complete2show(){
    document.getElementById("post-btn-2").innerHTML = '✓';
    document.getElementById("post-btn-2").style.background = "#2ECC71"
}
function complete2hide(){
    document.getElementById("post-btn-2").innerHTML = '✖';
    document.getElementById("post-btn-2").style.background = "#eee"
}
    
function complete3show(){
    document.getElementById("post-btn-3").innerHTML = '✓';
    document.getElementById("post-btn-3").style.background = "#2ECC71"
}
function complete3hide(){
    document.getElementById("post-btn-3").innerHTML = '✖';
    document.getElementById("post-btn-3").style.background = "#eee"
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
    document.getElementById("task-btn").style.display = "none";
}
function tasksNotClicked(){
    document.getElementById("tasks").style.background = "#fff";
    document.getElementById("task").style.display = "block";
    document.getElementById("task2").style.display = "block";
    document.getElementById("task-btn").style.display = "inline-block";
}

function announcementsClicked(){
    document.getElementById("announcements").style.background = "rgba(0, 0, 0, 0.2)";
    document.getElementById("announcements").style.cursor = "pointer";
    document.getElementById("announcement").style.display = "none";
    document.getElementById("ann-btn").style.display = "none";
}
function announcementsNotClicked(){
    document.getElementById("announcements").style.background = "#fff";
    document.getElementById("announcement").style.display = "block";
    document.getElementById("ann-btn").style.display = "inline-block";
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