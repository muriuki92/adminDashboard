<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/headers.php') ?>
<body>

<!-- image tab starts here -->

    <div class="header" style="text-align:center;">
        <span>Zalego Training|Admin Login</span>
    </div>
    <br>
    <br>

    <?php require_once('includes/navbar.php') ?>

<!-- image tab ends here -->

<!-- form input starts here -->

<div class="container">
    <div class="shadow-lg p-3 mb-3 bg-body rounded">
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
                <p>Have an account? sign in</p> <a href="#">Here</a>
            </div>
        </form>
    </div>
</div>            
<!-- form input ends here -->

<!-- script tags start here -->
<?php require_once('includes/sripts.php') ?>
<!-- script tags end here -->

</body>
</html>