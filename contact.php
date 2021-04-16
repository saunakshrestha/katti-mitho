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
                    <li>
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

                    <li class="active">
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
    </div>
    <!-- navbar navbar default ends -->

    <div id="content">
        <div class="container">
            <!--Container Starts-->
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>
                        Shop
                    </li>
                </ul>
            </div>

            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2>Contact Us</h2>
                            <p class="text-muted">Any question ask us Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, dolore. Natus quibusdam mollitia nulla autem quae rerum eius libero repellat. Placeat blanditiis nihil enim, optio obcaecati nostrum dolorem ullam quia?
                                Repudiandae, ipsa cum totam praesentium quasi aspernatur vero, architecto recusandae tempore, soluta assumenda veniam fugit a neque? Nulla neque doloribus, nostrum error saepe quis reiciendis delectus non facilis repudiandae suscipit!
                                Nostrum nulla voluptas eos autem doloribus quis nisi incidunt! Hic, labore repellendus facere explicabo perspiciatis nihil blanditiis magni sint sunt exercitationem asperiores at ex ratione, quos laborum vero pariatur nisi?
                                Voluptate veniam rem commodi corrupti deleniti, quas aspernatur quia molestiae soluta. Minus vel quasi quibusdam ex tenetur. Quo cupiditate, iusto ea iste consequuntur, nisi sapiente velit voluptatum at ex neque.</p>
                        </center>
                    </div>
                    <form action="contact.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>
                                <E-mail></E-mail>
                            </label>
                            <input type="text" name="email" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="submit" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" name="message"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fa fa-user-md"></i>Send Message
                            </button>
                        </div>

                    </form>
                </div>

            </div>



        </div>
        <!--Container ENds-->

    </div>
    <!--Content ENds-->







    <!-- Footer Start -->
    <?php
    include("includes/footer.php");
    ?>

    <!-- JS CODE -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>