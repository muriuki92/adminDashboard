<?php
    require_once('logics/dbconnection.php');

    $sql =mysqli_query($conn, "SELECT * FROM contactus");

?>


<!DOCTYPE html>
<html>
    <?php require_once('includes/headers.php') ?>
<body>
    <div class="navbar-nav">
        <a href="contactus.php" class="nav-link-active">Messages</a>
    </div>
    <?php require_once('includes/navbar.php') ?>

        <div class="sidebar">
            <?php require_once('includes/sidebar.php') ?>
        </div>

        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-header bg-white text-dark text-center">
                            <span>Messages</span>
                        </div>
                        <div class="card-body">
                            <table class="table table-stripped table-responsive" style="font-size:12px">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>first name </th>
                                        <th>last name</th>
                                        <th>email</th>
                                        <th>phone number</th>
                                        <th>message</th>
                                        <th>created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($fetchContactusdetails= mysqli_fetch_array($sql)) {?>
                                    <tr>
                                        <td><?php echo$fetchContactusdetails['no'] ?></td>
                                        <td><?php echo$fetchContactusdetails['firstname'] ?></td>
                                        <td><?php echo$fetchContactusdetails['lastname'] ?></td>
                                        <td><?php echo$fetchContactusdetails['email'] ?></td>
                                        <td><?php echo$fetchContactusdetails['phonenumber'] ?></td>
                                        <td><?php echo$fetchContactusdetails['message'] ?></td>
                                        <td><?php echo$fetchContactusdetails['created_at'] ?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- script tags begin here -->
        <?php require_once('includes/scripts.php') ?>
<!-- script tags end here -->
</body>
</html>