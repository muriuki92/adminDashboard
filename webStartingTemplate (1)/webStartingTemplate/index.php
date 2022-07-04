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
                            <span>Topcontent</span>
                        </div>
                        <div class="card-body"></div>
                        <div class=" card-footer"></div>
                    </div>
                        <div class="col-lg-3">
                            <div class="card-header bg-dark text-white text-center">
                                <span>Students</span>
                            </div>
                            <div class="card-body">
                                <span><i class="fa fa-group fa-3x"></i></span>
                                <span class="float-right">00</span>
                            </div>
                            
                            <div class=" card-footer"></div>
                        </div>  
                         <div class="col-lg-3">
                            <div class="card-header bg-dark text-white text-center">
                                <span>Available courses</span>
                            </div>
                            <div class="card-body">
                                <span><i class="fa fa-folder-open fa-3x"></i></span>
                                <span class="float-right">00</span>
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
	
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="jquery.min.js"></script>

</body>
</html>