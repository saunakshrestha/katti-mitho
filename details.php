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
                    <li class="active">
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
            <div class="col-md-3">
                <?php
                include("includes/sidebar.php");
                ?>

            </div>



            <div class="col-md-9">
                <div class="row" id="productmain">
                    <div class="col-sm-6">
                        <!-- col sm 6 start-->
                        <div id="mainimage">
                            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#mycarousel" data-slide-to="1"></li>
                                    <li data-target="#mycarousel" data-slide-to="2"></li>

                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center>
                                            <img src="admin_area/product_images/101.jpg" class="img-responsive">
                                        </center>

                                    </div>
                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/101_2.jpg" class="img-responsive">
                                        </center>
                                    </div>
                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/101_3.jpg" class="img-responsive">
                                        </center>
                                    </div>


                                </div>
                                <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>

                                </a>
                                <a href="#mycarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>

                                </a>

                            </div>
                        </div>
                    </div> <!-- col sm 6 end-->
                    <div class="col-sm-6">
                        <!-- final col sm 6 start-->
                        <div class="box">
                            <h1 class="text-center"> The most delicous burger of the town ! Grab it !</h1>
                            <form action="details.php" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-5" control-label>Food Quantity</label>
                                    <div class="col-md-7">
                                        <select name="food_qty class=" form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Product Size</label>
                                    <div class="col-md-7">
                                        <select name="product_size" class="form-control">
                                            <option>Select a size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                            <option>Extra Large</option>

                                        </select>
                                    </div>



                                </div>
                                <p class="price">Nrs 200</p>
                                <p class="text-center buttons">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-shopping-cart"></i>Add to Cart
                                    </button>

                                </p>
                            </form>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/101.jpg" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/101_2.jpg" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/101_3.jpg" class="img-responsive">
                            </a>
                        </div>

                    </div> <!-- final col sm 6 end-->




                </div>

                <div class="box" id="details">
                    <h4>Product Details</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus id ipsum quae, repudiandae ex cupiditate dignissimos quaerat facilis reiciendis hic delectus recusandae sequi officia fuga saepe alias veniam repellendus nihil!
                        Et quis commodi officia quam recusandae veniam itaque minima mollitia architecto. Qui, animi quisquam accusamus expedita nisi iste illo voluptates voluptatibus alias, laboriosam enim! Minus veniam ea eaque a cumque?
                        Illum ex minus consequuntur obcaecati provident libero, voluptatum pariatur eius iste qui dolores voluptate asperiores ducimus veniam, laborum ab dolor, repellat nihil deleniti et nostrum magnam veritatis? Repudiandae, ipsam perspiciatis.
                        Voluptas laborum odit dolorem iusto molestias aliquid possimus facilis dicta itaque. Vitae voluptates placeat, distinctio, suscipit debitis, dolor magni voluptatibus labore reiciendis eum dolorem. Ea accusantium porro doloribus quaerat quas!
                        Tempora, facilis? Neque fugit quam accusantium dolores voluptates quae, a animi voluptatibus placeat vitae ad doloremque perspiciatis totam minus nulla ducimus quis, deserunt fuga deleniti quibusdam est sunt qui facilis!
                        Eius autem cumque soluta magnam, laboriosam fuga explicabo ex quaerat, eveniet culpa aliquid quia. Illum ullam itaque, facilis illo maiores dolores at ea ducimus libero natus nobis. Rerum, mollitia illo.
                        Impedit consequatur explicabo placeat temporibus ullam, accusamus vitae autem labore quos illo. Odio corrupti culpa laboriosam eos atque accusantium, odit sunt repudiandae mollitia eaque eveniet autem illum veniam pariatur minus?
                        Dicta neque voluptates recusandae itaque earum, ipsa sit sed beatae tempora sunt perferendis dolor inventore possimus voluptatibus in fugiat doloribus quaerat quo esse? Sequi ab dolorem mollitia laboriosam aliquid nihil?
                        Reprehenderit placeat nostrum ducimus doloremque, dicta voluptatibus porro iste itaque ratione temporibus veniam sed laboriosam amet ea? Sunt, doloremque consequuntur vel unde dolorem praesentium nostrum amet quas obcaecati, officiis fuga?
                        Facere omnis placeat nobis, magnam expedita accusamus iste repellendus vitae. Distinctio quod assumenda at officiis deleniti aspernatur facilis voluptate veritatis ratione rem! Alias vero sit aperiam deserunt magnam rerum ex.
                    </p>
                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                        <li>Extra Large</li>

                    </ul>
                </div>
                <div id="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">You also may like these items</h3>

                        </div>

                    </div>
                    <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <div class="text">
                                    <h3> <a href="details.php">Burger Special</a></h3>
                                    <p class="price">Nrs 200</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <div class="text">
                                    <h3> <a href="details.php">Burger Special</a></h3>
                                    <p class="price">Nrs 200</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <div class="text">
                                    <h3> <a href="details.php">Burger Special</a></h3>
                                    <p class="price">Nrs 200</p>
                                </div>
                            </a>
                        </div>
                    </div>

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