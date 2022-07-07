<?php
    require_once('logics/dbconnection.php');
    $querystudent = mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."'");
    while($fetchstudent = mysqli_fetch_array($querystudent))
    {
        $firstname = $fetchstudent['firstname'];
        $lastname = $fetchstudent['lastname'];
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
            <div class="col-lg-12">
                <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit students  <?php echo $firstname ?></h4>

                        </div>
                    <form action="enroll.php" method="POST" >
                        <div class="container col-lg-12 px-5 ">
    
                            <div class="row shadow p-3 mb-5 bg-body">
                
                            <div class="mb-3 px-5 py-5 col-lg-6" >
                                <label for="FullName"  class="form-label"><h6> Full Name:</h6></label>
                                <input type="text" name="fullname" class=" form-control" placeholder=" Enter Your full Name" >
                                
                            </div>
            
                            <div class="mb-3 px-5 py-5 col-lg-6">
                                <label for="PhoneNumber" class="form-label"><h6>Phone Number: </h6></label>
                                <input type="tell"  name ="phonenumber" class="form-control" placeholder="+2547..." >
                                
                            </div>
                        

                            <div class="row ">
                                <div class="mb-3 px-5 col-lg-6" >
                                <label for="EmailAddress"  class="form-label"><h6>Email Address:</h6></label>
                                <input type="email" name="email" class="  form-control" placeholder="Please Enter Your Phone Number" >
                                
                            </div>
            
                            <div class="mb-3 px-5  col-lg-6">
                                <label for="What'sYourGender"  class="form-label"><h6>What's Your Gender?</h6></label>
                                
                                <select class="form-select  form-control" name="gender" aria-label="Default select example">
                                    <option selected><h1>--Select Your Gender--</h1></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                            </div>
                            <div class="mb-3 px-5 col-lg-6">
                                <label for="Course"  class="form-label"><h6>What's Your Preffered Course?</h6></label>
                                <select  class="form-select joy shadow form-control" name="course"  aria-label="Default select example">
                                    <option selected><h6>--Select Your Course--</h6></option>
                                    <option value="Android App Development">Android App Development</option>
                                    <option value="Web Design & Development">Web Design & Development</option>
                                    <option value="Web Design & Development">Data Analysis</option>
                                    <option value="Cyber Security">Cyber Security</option>
                                </select>
                            </div>
                        </div>
                        
                        
                    </form>
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