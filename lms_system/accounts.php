<?php include('server.php'); include('auth_session.php');  ?>
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
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <?php
    include 'header.php';
    ?>
<body>
    
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                <div class="tab">
                    <div class='container'>
                      <div class='sidebar'>
                        <div class='sidebar__header' style="height: 65px; width: 270px;">
                          <img alt='' class='sidebar__avatar' src="user.png" style="width: 40px; margin-top: -5px;">
                          <p style="margin-right: 50px;"><?php echo $_SESSION['student_id']; ?></p>
                        </div>
                        <div class='sidebar__menu-item' style="height: 65px;">
                          <i class='fa fa-university'></i>
                          <button class="btn" onclick="openTab('Profile')" style="display: inline-block; width: 270px; height: 65px; margin-left: 0px; ">Profile</button>
                        </div>
                        <div class='sidebar__menu-item' style="height: 65px;">
                          <i class='fa fa-bar-chart'></i>
                          <button class="btn" onclick="openTab('Add Profile')" style="display: inline-block; width: 270px; height: 65px; margin-left: 0px;">Add Profile</button>
                        </div>
                        <div class='sidebar__menu-item' style="height: 65px;">
                          <i class='fa fa-cog'></i>
                          <button class="btn" onclick="openTab('Add Class')" style="display: inline-block; width: 270px; height: 65px; margin-left: 0px;">Add Class</button>
                        </div>
                        <div class='sidebar__menu-item' style="height: 65px;">
                          <i class='fa fa-suitcase'></i>
                          <button class="btn" onclick="openTab('Help')" style="display: inline-block; width: 270px; height: 65px; margin-left: 0px;">Help</button>
                        </div>
                        <div class='sidebar__menu-item' style="height: 65px;">
                          <i class='fa fa-envelope-o'></i>
                          <button class="btn" onclick="openTab('Settings')" style="display: inline-block; width: 270px; height: 65px; margin-left: 0px;">Settings</button>
                        </div>
                        <div class='sidebar__menu-item' style="height: 65px;">
                          <i class='fa fa-envelope-o'></i>
                          <a href="logout.php">
                          <button class="btn btn-primary btn-block" type="submit" value="logout" style="display: inline-block; width: 270px; height: 65px; margin-left: 0px;" action="logout.php">Log off</button></a>
                        </div>
                      </div>
                      <div class='main'>
                        <div class='main__header'>
                          <h2>Settings</h2>
                        </div>
                        <div class='main__content'>
                          <div id="Profile" class="container settings">
                          <div id="settings" class="tabcontent">
                            <form action='#' method='post'>
                              <label class='main__input-label'>Your name:</label>
                              <input class='main__input' placeholder='<?php echo $_SESSION['student_id']; ?>' type='text' disabled>
                              <label class='main__input-label'>Your e-mail:</label>
                              <input class='main__input' placeholder='<?php echo $_SESSION['email']; ?>' type='text' disabled>
                              <label class='main__input-label'>Your e-mail for notifications:</label>
                              <input class='main__input' placeholder='<?php echo $_SESSION['email']; ?>' type='text' disabled>
                            </form>
                          </div>
                        </div>
                        <div id="Add Profile" class="container settings" style="display:none">
                            <div id="settings" class="tabcontent">
                            <form method="post" action="accounts.php">
                                <?php include('errors.php'); ?>
                            <div class="main__input-label">
                			<label>Full Name</label>
                			<input class="main__input" type="text" name="username" value="<?php echo $username; ?>">
                		</div>
                		<div class="main__input-label">
                			<label>ID</label>
                			<input class="main__input" type="text" name="student_id" value="<?php echo $student_id; ?>">
                		</div>
                		<div class="main__input-label">
                			<label>Email</label>
                			<input class="main__input" type="email" name="email" value="<?php echo $email; ?>">
                		</div>
                		<div class="main__input-label">
                			<label>User type</label>
                			<select class="main__input" name="usertype" id="usertype">
                				<option value=""></option>
                				<option value="admin">Teacher</option>
                				<option value="user">Student</option>
                			</select>
                		</div>
                		<div class="main__input-label">
                			<label>Password</label>
                			<input class="main__input" type="password" name="password_1">
                		</div>
                		<div class="main__input-label">
                			<label>Confirm password</label>
                			<input class="main__input" type="password" name="password_2">
                		</div>
                			<button onclick="regClick" class="btn btn-primary btn-block" type="submit" name="register_btn" >Add User</button>
                		</form>
                          </div>
                        </div>
                        <div id="Help" class="container settings" style="display:none">
                          <div id="settings" class="tabcontent">
                            <form action='#' method='post'>
                              <section class="clean-block clean-form dark">
                                <div class="container">
                                    <div class="block-heading">
                                        <h2 class="text-info">Contact Support</h2>
                                    </div>
                                    <form data-bss-recipient="f16f4f2857049be592bb219a4d6c6a79" data-bss-subject="Contact HelpMe">
                                        <div class="form-group"><label>Name</label><input class="form-control" type="text"></div>
                                        <div class="form-group"><label>Subject</label>
                                            <select class="form-control">
                                                <option>General Issue</option>
                                                <option>Site Maintenance</option>
                                                <option>Sign up Issue</option>
                                                <option>Attendance</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label>Email</label><input class="form-control" type="email"></div>
                                        <div class="form-group"><label>Message</label><textarea class="form-control"></textarea></div>
                                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
                                    </form>
                                </div>
                            </section>
                            </form>
                          </div>
                        </div>
                        <div id="Add Class" class="container settings" style="display:none">
                          <div id="settings" class="tabcontent">
                            <form action='accounts.php' method='post'>
                              <section class="clean-block clean-form dark">
                                <div class="container">
                                    <div class="block-heading">
                                        <h2 class="text-info">Add a class</h2>
                                    </div>
                            <form method="post" action="accounts.php">
                                <?php include('errors.php'); ?>
                            <div class="main__input-label">
                			<div class="form-group"><label for="name">Enter Class Below</label><input name="class" class="form-control item" type="text" id="class" required="" value="<?php echo $class; ?>"></div>
                		</div>
                			<button onclick="regClick" class="btn btn-primary btn-block" type="submit" name="add_class" >Add Class</button>
                		</form>
                          </div>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
				</div>
            </div>
                <script>
                function openTab(tabName) {
                  var i;
                  var x = document.getElementsByClassName("settings");
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  document.getElementById(tabName).style.display = "block";  
                }
                </script>
        </section>
    </main>
   <?php
    include ("../footer.php")
    ?>
    

</body>


</html>