<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) { 
    header('location: products.php'); 
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store | Home</title>
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
    <body style="padding-top: 50px">
        <!-- Header -->
        <?php
        include 'includes/header.php';        
        ?>
        <!-- Header end -->
        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container text-center">
                    <center>
                        <div id="banner_content" >
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>    
                </div> 
            </div>
            <!--Main banner image end--> 
            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/camera.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/watch.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/shirt.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Item categories listing end-->
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
