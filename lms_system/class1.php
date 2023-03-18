<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"><!--Allows the screen to fit mobile devices-->
    <title>Class One - Techwise</title>
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
            <a href="classes.php">My Classes</a><!--Links to each page-->
            <a href="class1.php" class="active">Class One</a>
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
        <a href="classes.php">My Classes</a>
        <a href="class1.php" class="active">Class One</a>
        <a href="class2.php">Class Two</a>
        <a href="class3.php">Class Three</a>
        <a href="class4.php">Class Four</a>
        </div>
</nav>

<body>
    <div class="banner"><!--Banner--> 
        <div class="banner1">
            <div class="bannerContent1"></div><!--Image for banner-->
            <h1>Class One</h1>
        </div>
    </div>

    <div class="filter"><!--Buttons that filter out content-->
        <a href="#" id="tasks" onclick="tasks();">Tasks <img src="img/black-circle-close-button-png-5.png" id="taskBtn" alt="Cross button to filter out task posts"></a><!--Task button: clicking this removes all tasks-->
        <a href="#" id="announcements" onclick="announcements();">Announcements <img src="img/black-circle-close-button-png-5.png" id="annBtn" alt="Cross button to filter out announcement posts"></a><!--Announcement button: clicking this removes all announcements-->
        
        <div class="sorting"><!--Sorting menu-->
            <form class="sort" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="sort">Sort By:</label>
                <select name="sort" id="sort">
                    <option id="dueNew" value="dueNew">Date Due (Newest to Oldest)</option>
                    <option id="dueOld" value="dueOld">Date Due (Oldest to Newest)</option>
                    <option id="assignNew" value="assignNew">Date Assigned(Newest to Oldest)</option>
                    <option id="assignOld" value="assignOld">Date Assigned(Oldest to Newest)</option>
                </select>
                <input type="submit"><!--Submit button-->
            </form>
            <?php
                $sort = "dueNew";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {# Takes input from the sorting menu and converts it to a PHP variable
                  $sort = test_input($_POST["sort"]);
                }

                function test_input($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }
            ?>
        </div>
    </div>

    <div class="stream"><!--The main stream of the page where the posts are-->
        <div class="post" id="task"><!--First post-->
            <h1 id="taskTitle1">Task</h1>
            <div class="date">
                <div class="left" id="assign1">Assigned: 12th Oct</div><!--Assignment date on the left-->
                <div class="right" id="due1">Due: 24th Oct</div></div><!--Due date on the right-->
            <button id="postBtn1" onclick="complete1();" title="Mark as Complete">✖</button><!--Check button-->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><!--Paragraph text-->
        </div>
        <div class="post" id="announcement"><!--Second post-->
            <h1 id="taskTitle2">Announcement</h1>
            <div class="date">
                <div class="left" id="assign2">Posted: 16th Oct</div><!--Assignment date on the left-->
                <div class="right" id="due2"></div></div>
            <button id="postBtn2" onclick="complete2();">✖</button><!--Check button-->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><!--Paragraph text-->
        </div>
        <div class="post" id="task2"><!--Third post-->
            <h1 id="taskTitle3">Task</h1>
            <div class="date">
                <div class="left" id="assign3">Assigned: 22nd Oct</div><!--Assignment date on the left-->
                <div class="right" id="due3">Due: 28th Oct</div></div><!--Due date on the right-->
            <button id="postBtn3" onclick="complete3();">✖</button><!--Check button-->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><!--Paragraph text-->
        </div>
    </div>
</body>

<footer>
    <div class="footer"><!--container for all of the footer links-->
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
var sort = <?php echo json_encode($sort, JSON_HEX_TAG); ?>;/*Converts the PHP variable to a JS variable*/

switch (sort){/*Reorganises the cards according the sorting menu*/
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
        document.getElementById("assign1").innerHTML = 'Assigned: 12th Oct';       
        document.getElementById("due1").innerHTML = 'Due: 24th Oct';
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
        document.getElementById("assign1").innerHTML = 'Assigned: 22nd Oct';       
        document.getElementById("due1").innerHTML = 'Due: 28th Oct';
        document.getElementById("taskTitle2").innerHTML = 'Announcement';
        document.getElementById("assign2").innerHTML = 'Posted: 16th Oct';
        document.getElementById("due2").innerHTML = '';
        document.getElementById("taskTitle3").innerHTML = 'Task';
        document.getElementById("assign3").innerHTML = 'Assigned: 12th Oct';
        document.getElementById("due3").innerHTML = 'Due: 24th Oct';
        document.getElementById("assignOld").selected = true;
        break;
}
    
function complete1show(){/*Changes the button to a check*/
    document.getElementById("postBtn1").innerHTML = '✓';
    document.getElementById("postBtn1").style.background = "#2ECC71"
}
function complete1hide(){/*Changes the button to a cross*/
    document.getElementById("postBtn1").innerHTML = '✖';
    document.getElementById("postBtn1").style.background = "#eee"
}
function complete2show(){/*Changes the button to a check*/
    document.getElementById("postBtn2").innerHTML = '✓';
    document.getElementById("postBtn2").style.background = "#2ECC71"
}
function complete2hide(){/*Changes the button to a cross*/
    document.getElementById("postBtn2").innerHTML = '✖';
    document.getElementById("postBtn2").style.background = "#eee"
} 
function complete3show(){/*Changes the button to a check*/
    document.getElementById("postBtn3").innerHTML = '✓';
    document.getElementById("postBtn3").style.background = "#2ECC71"
}
function complete3hide(){/*Changes the button to a cross*/
    document.getElementById("postBtn3").innerHTML = '✖';
    document.getElementById("postBtn3").style.background = "#eee"
}
 
/*Determines whether the button for each of the posts will be a check or cross*/
var buttonTrue = true;
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

function tasksClicked(){/*Hides the tasks*/
    document.getElementById("tasks").style.background = "rgba(0, 0, 0, 0.2)";
    document.getElementById("tasks").style.cursor = "pointer";
    document.getElementById("task").style.display = "none";
    document.getElementById("task2").style.display = "none";
    document.getElementById("taskBtn").style.display = "none";
}
function tasksNotClicked(){/*Shows the tasks*/
    document.getElementById("tasks").style.background = "#fff";
    document.getElementById("task").style.display = "block";
    document.getElementById("task2").style.display = "block";
    document.getElementById("taskBtn").style.display = "inline-block";
}
function announcementsClicked(){/*Hides the announcements*/
    document.getElementById("announcements").style.background = "rgba(0, 0, 0, 0.2)";
    document.getElementById("announcements").style.cursor = "pointer";
    document.getElementById("announcement").style.display = "none";
    document.getElementById("annBtn").style.display = "none";
}
function announcementsNotClicked(){/*Shows the announcements*/
    document.getElementById("announcements").style.background = "#fff";
    document.getElementById("announcement").style.display = "block";
    document.getElementById("annBtn").style.display = "inline-block";
}
    
/*Determines whether the filter buttons will show or hide the posts*/
var filterTrue = true;
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