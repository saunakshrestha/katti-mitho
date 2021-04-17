<?php
include("includes/db.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katti Mitho</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="navbar navbar-default " id="navbar">
        <!-- navbar starts-->
        <div class="container " id="logo">

            <div class="navbar-header">
                <a class="navbar-brand home" href="index.php">
                    <img src="images/logo.jpg" alt="Katti Mitho" class="hidden-xs">
                    <img src="images/logo-sm.jpg" alt="Katti Mitho" class="visible-xs">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
                    <span class="sr-only"></span>
                    <i class="fa fa-search"></i>

                </button>
            </div>


        </div>
        <div class="navbar-collapse" id="navigation">
            <!-- navbar-collapse collapse start -->
            <div class="padding-nav">
                <!-- padding nav start -->
                <ul class="nav navbar-nav navbar-left">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="food.php">Food</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Shopping Cart</a>
                    </li>

                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li class="dropdown">
                        <a href="login.php">Login/Reg.</a>
                        <div class="dropdown-content">
                            <a href="login.php">Login</a><br><br>
                            <a href="customer_registration.php">Register</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <!-- padding nav stop -->
        <div class="cart-search">
            <a href="cart.php" class="btn btn-primary navbar-btn right">
                <i class="fa fa-shopping-cart"></i>
                <span>4</span>
            </a>

            <div class="navbar-collapse collapse right">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="collapse clearfix" id="search">
                <form class="navbar-form" method="get" action="result.php">
                    <div class="input-group">
                        <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                        <span class="input-group-btn">
                            <button type="submit" value="Search" name="search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>


        <!-- navbar navbar default ends -->
    </div>
    <div class="container" id="slider">
        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="myCarousel" data-slide-to="0" class="action"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li>
                    <li data-target="myCarousel" data-slide-to="2"></li>
                    <li data-target="myCarousel" data-slide-to="3"></li>

                </ol>
                <!-- carousel inner start -->
                <div class="carousel-inner">
                    <?php
                        $get_slider="select * from slider LIMIT 0,1";
                        $run_slider=mysqli_query($con,$get_slider);
                        while($row=mysqli_fetch_array($run_slider)){
                            $slider_name=$row['slider_name'];
                            $slider_image=$row['slider_image'];
                            echo "<div class='item active'>
                            <img src='admin_area/slider_image/$slider_image'></div>";
                        }
                    ?>
                    <?php
                        $get_slider="select * from slider LIMIT 1,3";
                        $run_slider=mysqli_query($con,$get_slider);
                        while($row=mysqli_fetch_array($run_slider)){
                            $slider_name=$row['slider_name'];
                            $slider_image=$row['slider_image'];
                            echo "<div class='item'>
                            <img src = 'admin_area/slider_image/$slider_image'></div>";
                        }
                    ?>

                </div>
                <!-- carousel inner end -->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
    <!-- box ads 1 -->
    <div id="advantage">
        <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>

                        </div>
                        <h3> <a href="#"> BEST TASTE</h3>
                        <p> Just checkout a food. We will serve you asap!</p>
                    </div>
                </div>
            </div>


            <!-- box ads 2 -->

            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>

                        </div>
                        <h3> <a href="#"> 100% OFF TOMMORROW </h3>
                        <p> Free Food Tomorrow &#128525 !!
                           <br>You,Our First Choice ! </p>
                    </div>
                </div>
            </div>

            <!-- box ads 3-->

            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>

                        </div>
                        <h3> <a href="#"> Our first choice is you .</h3>
                        <p> Freshness delivered.The food at your doorstep.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2> Trending This Week </h2>
                </div>

            </div>
        </div>

    </div>

    <div id="content" class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/101.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Burger Special</a></h3>
                        <p class="price">Rs. 300</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn -default">View Details</a>
                            <i class="fa fa-shopping-cart"></i>Add to cart
                        </p>
                    </div>
                </div>
            </div>
            <!-- no.2 -->
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/102.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Crunchy </a></h3>
                        <p class="price">Rs. 300</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn -default">View Details</a>
                            <i class="fa fa-shopping-cart"></i>Add to cart
                        </p>
                    </div>
                </div>
            </div>
            <!-- no.3 -->
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/103.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Naan</a></h3>
                        <p class="price">Rs. 300</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn -default">View Details</a>
                            <i class="fa fa-shopping-cart"></i>Add to cart
                        </p>
                    </div>
                </div>
            </div>
            <!-- no4 -->
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/104.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">French Crunch</a></h3>
                        <p class="price">Rs. 300</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn -default">View Details</a>
                            <i class="fa fa-shopping-cart"></i>Add to cart
                        </p>
                    </div>
                </div>
            </div>
            <!-- no.5 -->
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/105.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Bun with fries </a></h3>
                        <p class="price">Rs. 300</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn -default">View Details</a>
                            <i class="fa fa-shopping-cart"></i>Add to cart
                        </p>
                    </div>
                </div>
            </div>
            <!-- no.6 -->
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/106.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Omelette and Chocolate Special </a></h3>
                        <p class="price">Rs. 300</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn -default">View Details</a>
                            <i class="fa fa-shopping-cart"></i>Add to cart
                        </p>
                    </div>
                </div>
            </div>
            <!-- no.7 -->
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/107.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Chicken Leg Piece </a></h3>
                        <p class="price">Rs. 300</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn -default">View Details</a>
                            <i class="fa fa-shopping-cart"></i>Add to cart
                        </p>
                    </div>
                </div>
            </div>
            <!-- no8 -->
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/108.jpg" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Fish Fry </a></h3>
                        <p class="price">Rs. 300</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn -default">View Details</a>
                            <i class="fa fa-shopping-cart"></i>Add to cart
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <?php
    include("includes/footer.php");
    ?>








    <!-- JS CODE -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>