<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Life Style Store</title>
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
        <!--LOGIN FORM -->
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning">
                                    <i>Login to make a purchase</i>
                                <p>
                                <form role="form" action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"
                                               placeholder="Email" name="e-mail"
                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" 
                                               placeholder="Password" name="password" 
                                               required>
                                    </div>
                                    <button type="submit" name="submit" 
                                            class="btn btn-primary">Login</button>
                                            <br><br>
                                </form><br/>
                            </div>
                            <div class="panel-footer">
                                <p>Don't have an account? 
                                    <a href="signup.php">Register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login form end -->
        <!-- Footer -->
        <?php
        include 'includes/footer.php';
        ?>
        <!-- Footer end -->
    </body>
</html>