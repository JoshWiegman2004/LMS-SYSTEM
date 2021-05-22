<?php include('server.php'); include('auth_session.php'); ?>
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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>
        
    <body>
    
    <?php
    include 'header.php';
    ?>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                             <?php
                             $db = mysqli_connect('cp-wc29', 'techwis1_Admin', 'cal5tHea', 'techwis1_teachersmain');
                                $dbname = 'techwis1_teachersmain';
                                $sql = "$db, SHOW TABLES FROM $dbname";
                                    $result = mysql_query($sql);
                                    
                                    if (!$result) {
                                        echo "DB Error, could not list tables\n";
                                        echo 'MySQL Error: ' . mysql_error();
                                        exit;
                                    }
                                    
                                    while ($row = mysql_fetch_row($result)) {
                                        echo "Table: {$row[0]}\n";
                                    }
                            ?>
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