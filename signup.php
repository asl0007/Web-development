<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store | Sign UP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" 
              type="text/css">
        <!-- External CSS-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- jQuery -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap core javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>        
    </head>
    <body>
        <!-- Header -->
        <?php
        include 'includes/header.php';        
        ?>
        <!-- Header end -->
        <!-- Sign Up Content -->
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" 
                                       name="name"  required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  
                                       placeholder="Email"  name="e-mail" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" 
                                       placeholder="Password" name="password"
                                       pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                                       required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  
                                       placeholder="Contact" maxlength="10" 
                                       size="10" name="contact" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  
                                        placeholder="City" name="city" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  
                                        placeholder="Address" name="address" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sign Up Content end -->
        <!--Footer -->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end -->
    </body>
</html>