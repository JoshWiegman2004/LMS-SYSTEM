<?php
session_start();
date_default_timezone_set('Pacific/Auckland');	
// initializing variables
$username = "";
$email    = "";
$user_type = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('cp-wc29', 'techwis1_Admin', 'cal5tHea', 'techwis1_teachersmain');
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db -> connect_error;

}
if (isset($_POST['register_btn'])) {
	register();
}

//ADD STUDENT TO CLASS
if (isset($_POST['classCode']))
	 // call these variables with the global keyword to make them available in function
	global $classCode;
	//receiving input
	$classCode = mysqli_real_escape_string($db, $_POST['classCode'])
	// form validation: ensure that the form is correctly filled
	if (empty($classCode)) { 
		array_push($errors,"A class code needs to be entered."); 
	}
if (count($errors) == 0){
	$code_check_query = "SELECT * FROM classes WHERE inviteCode='$classCode' LIMIT 1"
	$results = mysqli_query($db, $code_check_query);
	$class = mysqli_fetch_assoc($results);

	if (isset($_POST['classCode'])) {
		$query = "INSERT INTO classes ($class) 
				  	VALUES('$curr_user')";
		mysqli_query($db, $query);
		$_SESSION['success']  = "Added to class!!";
		array_push($errors, "Added to class!");
	}

//ADD A CLASS
if (isset($_POST['add_class'])) {
    // call these variables with the global keyword to make them available in function
	global $class;
	// receive all input values from the form. 
    // defined below to escape form values
    $class = mysqli_real_escape_string($db, $_POST['class']);
    // form validation: ensure that the form is correctly filled
	if (empty($class)) { 
		array_push($errors,"A class needs to be entered."); 
	}

function randomCode() {

	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$randomCode = '';

	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$randomCode = $randomCode . $tmp;
		$i++;
	}
}
    
 if (count($errors) == 0){
     
    mysqli_query($db,"ALTER TABLE classes ADD $class varchar(100)
        ");
	mysqli_query($db, "INSERT INTO classes ($class) 
							VALUES ($randomCode)");
 
 }
}

//REGISTER
function register(){
    
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;
	// receive all input values from the form. 
    // defined below to escape form values
	$username    =  ($_POST['username']);
	$student_id   =  ($_POST['student_id']);
	$email       =  ($_POST['email']);
	$usertype   =  ($_POST['usertype']);
	$password_1  =  ($_POST['password_1']);
	$password_2  =  ($_POST['password_2']);
    header('sdasd.php');
	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors,"Username is required"); 
	}
	if (empty($student_id)) { 
		array_push($errors,"Student ID is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if (empty($usertype)) { 
		array_push($errors, "User type is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
    
    // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' OR student_id='$student_id' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    
  if ($user) { // if user exists
    if ($user['student_id'] === $student_id) {
      array_push($errors, "Student ID already exists");
    }
  }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
    
	// register user if there are no errors in the form
  if (count($errors) == 0) {
	$password = $password_1;
  	  $salt = "y754t3687ryhe8wuinvburgeycuify32ei3ygfbuire";
						$password = $password.$salt;
						$hashedPassword = sha1($password);

		if (isset($_POST['user_type'])) {
			$user_type = ($_POST['user_type']);
			$query = "INSERT INTO users (username, email, usertype, password, student_id) 
					  VALUES('$username', '$email', '$usertype', '$hashedPassword', '$student_id')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			array_push($errors, "User successfully created!");
		}else{
			$query = "INSERT INTO users (username, email, usertype, password, student_id) 
					  VALUES('$username', '$email', '$usertype', '$hashedPassword', '$student_id')";
			mysqli_query($db, $query);

		}
	}
}



// LOGIN USER
if (isset($_POST['log_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $student_id = mysqli_real_escape_string($db, $_POST['student_id']);
  $student_id1 = mysqli_real_escape_string($db, $_POST['student_id']);
  
  if (empty($student_id)) {
  	array_push($errors, "ID is required");
  }
  
  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {

    $_SESSION['student_id'] = $student_id;
    
    $salt = "y754t3687ryhe8wuinvburgeycuify32ei3ygfbuire";
						$password = $password.$salt;
						$hashedPwd = sha1($password);				
		
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$hashedPwd' AND student_id='$student_id' LIMIT 1";
  	$results = mysqli_query($db, $query);
  	$result = $db->query($query);
		if (mysqli_num_rows($results) == 1) { // user found
	    	// check if user is admin or user
	    	$logged_in_user = mysqli_fetch_assoc($results);
    		if ($logged_in_user['user_type'] == 'admin') {
    		    $_SESSION['student_id1'] = $logged_in_user;
    			$user = mysqli_fetch_assoc($results);
      		    $student_id1 = $user['student_id'];
      		    $_SESSION['student_id'] = $student_id;
      	        $_SESSION['email'] = $email;
      	        $_SESSION['usertype'] = $usertype;
    			$_SESSION['success']  = "You are now logged in";
    			header('location: classes.php');		  
    		}
    		else{
    		    $_SESSION['student_id1'] = $logged_in_user;
    			$user = mysqli_fetch_assoc($results);
      		    $student_id1 = $user['student_id'];
      		    $_SESSION['student_id'] = $student_id;
      	        $_SESSION['email'] = $email;
      	        $_SESSION['usertype'] = $usertype;
    			$_SESSION['username'] = $logged_in_user;
        		$_SESSION['success']  = "You are now logged in";
    
    	    	header('location: classes.php');
    		}
	}
	else {
        echo $hashedPwd;
  		array_push($errors, "Incorrect password or email");
  	}
}
}

?>