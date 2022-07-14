<?php
    $message = '';
    require_once('logics/dbconnection.php');
    $querystudent = mysqli_query($conn,
    "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
    while($fetchstudent = mysqli_fetch_array($querystudent))
    {
        $id = $fetchstudent['no'];
        $fullname = $fetchstudent['fullname'];
        $phonenumber = $fetchstudent['phonenumber'];
        $email = $fetchstudent['email'];
        $course = $fetchstudent['course'];
        $gender = $fetchstudent['gender'];
        
    }
    //updating user records
    require_once('logics/dbconnection.php');
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
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-dark text-center text-white">
                        <div class="row ">
                            <a href="students.php" class="btn btn-light fa fa-arrow-left">Back</a>
                        </div>
                        <h4>Edit students</h4>
                        <?php echo $message ?>

                    </div>
                    <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST" >
                        <div class="row  p-3 mb-5 bg-body">
            
                            <div class="mb-3 px-5 py-5 col-lg-6" >
                                <label for="FullName"  class="form-label"><h6> Full Name:</h6></label>
                                <input type="text" name="fullname" value="<?php echo$fullname ?>" class=" form-control" placeholder="" >
                            </div>
                            <div class="mb-3 px-5 py-5 col-lg-6">
                                <label for="PhoneNumber" class="form-label"><h6>Phone Number: </h6></label>
                                <input type="tell"  name ="phonenumber"value="<?php echo$phonenumber ?>" class="form-control" placeholder="" >
                                
                            </div>
                            <div class="mb-3 px-5 col-lg-6" >
                                <label for="EmailAddress"  class="form-label"><h6>Email Address:</h6></label>
                                <input type="email" name="email"value="<?php echo$email ?>" class="  form-control" placeholder="" >
                                
                            </div>
        
                            <div class="mb-3 px-5  col-lg-6">
                                <label for="What'sYourGender"  class="form-label"><h6>What's Your Gender?</h6></label>
                                
                                <select class="form-select  form-control" name="gender" aria-label="Default select example">
                                    <option ><?php echo $gender?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3 px-5 col-lg-6">
                                <label for="Course"  class="form-label"><h6>What's Your Preffered Course?</h6></label>
                                <select  class="form-select form-control" name="course"  aria-label="Default select example"required>
                                    <option><?php echo $course?></option>
                                    <option value="Android App Development">Android App Development</option>
                                    <option value="Web Design & Development">Web Design & Development</option>
                                    <option value="Web Design & Development">Data Analysis</option>
                                    <option value="Cyber Security">Cyber Security</option>
                                </select>
                            </div>                             
                        </div> 
                        <div class="row p-3 mb-5">
                            <div class="col-lg-6 pt-3 mb-3">
                                <button type="submit" class="btn btn-primary" name="updateEnrollment">Update records</button>
                            </div>
                        </div>
                        
                    </form>
                
                </div>
            </div>
    </div>
</div>                        
    
        

	<!-- script links starts here -->
    <?php require_once('includes/scripts.php') ?>
    <!-- script links end here -->
</body>
</html>