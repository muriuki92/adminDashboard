<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap 5.2.0/bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
    
</head>
<body>

<!-- image tab starts here -->

    <div class="header" style="text-align:center;">
        <span>Zalego Training|Admin Login</span>
    </div>
    <br>
    <br>
    <div class="sub-header"style="text-align:center;">
            <img src="images/zalda.jpg" alt="logo" height="50" width="50" class="rounded-circle">
            <a href="#" class="navbar-trigger"><span></span></a>
        </div>

<!-- image tab ends here -->

<!-- form input starts here -->

<div class="container">
    <div class="shadow-lg p-3 mb-6 bg-body rounded">
        <form action="register.php" method="POST" class="form-group" autocomplete="off">
    
            <div class="row">    
                <div class="col-lg-12">
                    <label class="form-label"for="exampleFormControlInput">Username:</label>
                    <input type="text" class="form-control"  placeholder="" name="username">
                </div>
                <div class="col-lg-12">
                    <label class="form-label"for="exampleFormControlInput">Email:</label>
                    <input type="text" class="form-control" placeholder="" name="email">
                </div>
                <div class="col-lg-12">
                    <label class="form-label"for="inputpassword">Password:</label>
                    <input type="password" class="form-control"  id="password"placeholder="" name="pswd">
                </div>
                <div class="col-lg-12">
                    <label for="pwd" class="form-label"> Confirm Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="" name="pswd">
                </div>
                <br> 
            </div>
            <div class="form-group">
                <button type="submit" name="signUp" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-lg-12">
                <p>Have an account? </p> <a href="#">Here</a>
            </div>
        </form>
    </div>
</div>            
<!-- form input ends here -->

<!-- <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script> -->
       <script src="bootstrap 5.2.0/bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle..js"></script>
       <script src="bootstrap 5.2.0/bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

</body>
</html>