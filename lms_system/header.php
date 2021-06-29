<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();


}else
if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}
echo '

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166246046-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag("js", new Date());
    
      gtag("config", "UA-166246046-1");
    </script>

    <meta name="google-site-verification" content="7oQsIMCEtzEhFp14jLBmeWwx3iyk3ITaAlN-QtBx4dc" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TeacherPortal - TechWise</title>
    <meta name="description" content="Video tutorials for those who need them. Set up all kinds of social media and video chatting programs through easy video tutorials! ">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php" style="margin-right: 100px;"><img style="height: 50px;width: 88px;" src="../assets/img/2326b559-520a-4bff-ad0c-f585ab4b1ddc.png">&nbsp;TechWise<h5 style="font-size: 16px; margin-left: 98px; font-weight: 700;">TeacherPortal</h5></a>
            <div></div><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">';
             

                 if($_SERVER['REQUEST_URI'] == "/index.php"){
                         echo'';
               
                    }else {
                         echo'
                    <li class="nav-item" role="presentation"><a class="nav-link " href="index.php">Home</a></li>';
               
                    }
                    if($_SERVER['REQUEST_URI'] == "/index-log.php" or "/index-log-admin.php"){
					  echo '
                    <li class="nav-item" role="presentation"><a class="nav-link" href="classes.php">Classes</a></li>';  
                    echo '
                    <li class="nav-item" role="presentation"><a class="nav-link" href="attendance.php">Attendance</a></li>';
                    echo '
                    <li class="nav-item" role="presentation"><a class="nav-link" href="file-manager.php">Files</a></li>';  
					}
					if(isset($_SESSION['username'])){
					    	echo ($_SESSION['usertype']);
					    
					    	    	echo '
                    <li class="nav-item" role="presentation"><a class="nav-link" href="accounts.php">Dashboard</a></li>';
					    
					    
					}else{
					    	if($_SERVER['REQUEST_URI'] == "/login.php"){
					    	 	echo '
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="login.php">Login</a></li>';
					    	}else{
					    	echo '
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>';
					}
					}
				
                    echo '
                </ul>
            </div>
        </div>
    </nav>
    ';
?>
