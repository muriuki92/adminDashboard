<?php
require_once('logics/dbconnection.php');
//counting total number of students
$queryEnrolledStudents = mysqli_query($conn, "SELECT * FROM enrollment");
$countAllStudents = mysqli_num_rows($queryEnrolledStudents);

//count by gender
$queryEnrolledFemale = mysqli_query($conn, "SELECT * FROM enrollment WHERE gender ='female'");
$countAllFemale = mysqli_num_rows($queryEnrolledFemale);
?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>

    <div class="sidebar">
        <?php require_once('includes/sidebar.php') ?>
    </div>

    <div class="main-content">
    
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Topcontent</span>
                        </div>
                        <div class="card-body"></div>
                        <div class="card-footer"></div>
                    </div>
                        <div class="col-lg-3">
                            <div class="card-header bg-dark text-white text-center">
                                <span>Students</span>
                            </div>
                            <div class="card-body">
                                <span><i class="fa fa-group fa-3x"></i></span>
                                <span class="float-right badge bg-info square-pill"><?php echo $countAllStudents?></span>
                            </div>
                            
                            <div class="card-footer"></div>
                        </div>  
                         <div class="col-lg-3">
                            <div class="card-header bg-dark text-white text-center">
                                <span>Available courses</span>
                            </div>
                            <div class="card-body">
                                <span><i class="fa fa-folder-open fa-3x"></i></span>
                                <span class="float-right badge bg-warning square-pill"><?php echo $countAllFemale?></span>
                            </div>
                            
                            <div class=" card-footer"></div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card-header bg-dark text-white text-center">
                                <span>Campuses</span>
                            </div>
                            <div class="card-body">
                                <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                                <span class="float-right">00</span>
                            </div>
                            
                            <div class=" card-footer"></div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card-header bg-dark text-white text-center">
                                <span>Top content</span>
                            </div>
                            <div class="card-body">
                                <span><i class="fa fa-user fa-3x"></i></span>
                            <span class="float-right">00</span>
                            </div>
                           
                            <div class=" card-footer"></div>
                        </div>

                    	<div class="col-lg-12">
                        	<div class="card-header bg-dark text-white text-center">
								<span>Students Analysis</span>
							 </div>
						 	<div class="card-body">
                                <span><i class="fa fa-line-chart fa-3x"></i></span>
                            <span class="float-right"></span>
                            </div>
                           
                        	<div class=" card-footer"></div>
						</div>
                    </div>
                </div>
            </div>
    </div>
	
    <?php require_once('includes/scripts.php') ?>
</body>
</html>