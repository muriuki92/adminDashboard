<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="zalego";

    $conn = mysqli_connect($server,$username,$password,$database);

    $sql =mysqli_query($conn, "SELECT * FROM contactus");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar-nav">
                <a href="index.php" class="nav-link active">Students</a>
</div>
	<!-- All our code. write here   -->
	<div class="header">
        <img src="images/zalda.jpg" alt="logo" height="50" width="50" class="rounded-circle">
        <a href="#" class="navbar-trigger"><span></span></a>
    </div>

    <div class="sidebar">
    <nav>
        <ul>
           <li>
               <a href="students.php">
                   <span> <i class="fa fa-group fa-3x"></i></span>
                   <span>Students</span>
               </a>
           </li> 

           <li>
                <a href="">
                    <span> <i class="fa fa-folder-open fa-3x"></i></span>
                    <span>courses</span>
                </a>
            </li>

            <li>
                <a href="">
                    <span> <i class="fa fa-graduation-cap fa-3x"></i></span>
                    <span>Campus</span>
                </a>
            </li>

        </ul>
    </nav>
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
                                <td><<?php echo$fetchContactusRecord['phonenumber'] ?></td>
                                <td><?php echo$fetchContactusRecord['message'] ?></td>
                                <td><?php echo$fetchContactusRecord['created_at'] ?></td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">
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
    
    
            