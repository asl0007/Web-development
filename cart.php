<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: signup.php');
}else{
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store | cart</title>
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
        <div class="container-fluid" id="content">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!-- Header end -->
        <!-- Cart content -->
        <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td>Rs </td>
                                <td><a href='success.html' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <!-- Cart content end -->
        </div>
        <!-- Footer -->
        <?php
        include 'includes/footer.php';
        ?>
        <!-- Footer end -->
    </body>
</html>