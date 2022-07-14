<?php
    //database connection
    require_once('logics/dbconnection.php');
    $sqlFetchEnrolledStudent = mysqli_query($conn,
    "SELECT * FROM enrollment WHERE no= '".$_GET['id']."' ");
    while($fetchstudent = mysqli_fetch_array($sqlFetchEnrolledStudent))
    {
        $fullname = $fetchstudent['fullname'];
        $email = $fetchstudent['email'];
        $phonenumber =$fetchstudent['phonenumber'];
        $gender = $fetchstudent['gender'];
        $course = $fetchstudent['course'];
    }
?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>
	<!-- navbar starts here   -->
	<?php require_once('includes/navbar.php') ?>
    <!-- navbar ends here -->

    <!-- sidebar starts here -->
    <div class="sidebar">
        <?php require_once('includes/sidebar.php') ?>
    </div>
    <!-- sidebar ends here -->


<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <h4 class="card-title">Personal information</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                         <li class="list-group-item">Full Name: <span class="float-right badge-primary"><?php echo $fullname?></span></li>
                         <li class="list-group-item">Phone Number: <span class="float-right badge-warning"><?php echo $phonenumber?></span></li>
                         <li class="list-group-item">Email: <span class="float-right badge-dark"><?php echo $email?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <h4 class="card-title">Other information</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                         <li class="list-group-item">Gender: <span class="float-right badge-primary"><?php echo $gender?></span></li>
                         <li class="list-group-item">course: <span class="float-right badge-warning"><?php echo $course?></span></li>
                         <li class="list-group-item">Enrolled on: <span class="float-right badge-dark"></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                        
    
        

	<!-- script links starts here -->
    <?php require_once('includes/scripts.php') ?>
    <!-- script links end here -->
</body>
</html>