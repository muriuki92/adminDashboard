<?php
    require_once('logics/dbconnection.php');

    $sql =mysqli_query($conn, "SELECT * FROM contactus");

?>

<!DOCTYPE html>
<html>
    <?php require_once('includes/headers.php') ?>
<body>

    <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Students</a>
    </div>
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
                            <span>Students</span>
                        </div>
                        <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font-size:12px">
                            <thead>
                                <tr>
                                <th>NO.</th>
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>Enrolled on</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($fetchContactusRecord= mysqli_fetch_array($sql)) {?>
                                    <tr>
                                    <td><?php echo$fetchContactusRecord['no'] ?></td>  
                                    <td><?php echo$fetchContactusRecord['firstname'] ?></td>
                                    <td><?php echo$fetchContactusRecord['lastname'] ?></td>
                                    <td><?php echo$fetchContactusRecord['email'] ?></td>
                                    <td><?php echo$fetchContactusRecord['phonenumber'] ?></td>
                                    <td><?php echo$fetchContactusRecord['message'] ?></td>
                                    <td><?php echo$fetchContactusRecord['created_at'] ?></td>
                                    <td>
                                        <a href="edit-enrollment.php?id=<?php echo $fetchContactusRecord['no'] ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                            </table>   
                        <div class=" card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php require_once('includes/sripts.php') ?>
</body>
</html>    
   
            