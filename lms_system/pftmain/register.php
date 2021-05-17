<?php
include 'header.php';
// connect to the database
$db = mysqli_connect('cp-wc29', 'techwis1_Admin', 'cal5tHea', 'techwis1_teachersmain');
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db -> connect_error;

}
?> 
<body>
    <main class="page registration-page">
        <section class="clean-block clean-form dark" style="height:900px;">
            <div class="container" style="padding-top:200px;">
                <form method="post" action="register.php">
                    <?php include('errors.php'); ?>
                    <div class="form-group"><label for="name">Name</label><input name="username" class="form-control item" type="text" id="name" required="" value="<?php echo $username; ?>"></div>
                    <div class="form-group"><label for="email">Email</label><input name="email" class="form-control item" type="email" id="email" required="" value="<?php echo $email; ?>"></div>
                    <div class="form-group"><label>Role</label>
                                        <select class="form-control">
                                            <option>Student</option>
                                            <option>Teacher</option>
                                            <option>Admin</option>
                                        </select>
                                    </div>
                	<button class="btn btn-primary btn-block" type="submit" name="reg_user" >Sign Up</button>
                </form>
            </div>
        </section>
    </main>
</body>