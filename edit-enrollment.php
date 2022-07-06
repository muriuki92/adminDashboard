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