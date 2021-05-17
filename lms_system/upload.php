<?php

// connect to the database
$db = mysqli_connect('cp-wc29', 'techwis1_Admin', 'cal5tHea', 'techwis1_teachersmain');
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db -> connect_error;

}

if(isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg', 'jpeg', 'png', 'mov', 'pdf', 'mp4', 'mpeg4', 'mpeg');
    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: file-manager.php?uploadsuccess");
            }
            else {
                echo "File is too big.";
            }
        }
        else {
            echo "There was an error uploading your file.";
        }
    }
    else{
        echo "Can't upload files of this type.";
    }
}

?>