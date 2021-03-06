<!DOCTYPE html>
<html>

<head>
    <title>Account - Brand Store</title>
    <!-- add icon link -->
    <link rel="icon" href="images/47.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>




    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">DNK</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="account.php">Account</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="cart.html"><img src="images/10.png" height="30px"></a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <div class="container3">
        <div class="container">
            <div class="header-10">
                <p>My Account</p>
            </div>
            <div class="line">
                <p>_____________</p>
            </div>
            <div class="title-9">
                <p>Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="header-11">
            <p>Register yourself</p>
        </div>
        <div class="container4">
            <form action="registerToDb.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" required name="number">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required name="cpassword">
                </div>
                <div class="form-group form-check">
    <label class="form-check-label" for="exampleCheck1">already have an account </label><a href="account.php"> click here</a>
  </div>
                <button type="submit" class="btn btn-primary" name="register">Register</button>
            </form>
        </div>
    </div>

    <div class="foot-space"></div>

    <div class="footer">
        <div class="container">
            <div class="col-md-3">
                <div class="header-6">
                    <p>Quick Links</p>
                </div>

                <ul>
                    <li>Home</li>
                    <li>About Us</li>
                    <li>My Account</li>
                    <li>Cart</li>
                    <li>Contact</li>
                </ul>
            </div>

            <div class="col-md-3">
                <div class="header-6">
                    <p>For Her</p>
                </div>
                <ul>
                    <li>Women Jeans</li>
                    <li>Tops And Shirts</li>
                    <li>Women Jackets</li>
                    <li>Heels And Flats</li>
                    <li>Women Accessories</li>
                </ul>
            </div>

            <div class="col-md-3">
                <div class="header-6">
                    <p>For Him</p>
                </div>
                <ul>
                    <li>Men Jeans</li>
                    <li>Men Shirts</li>
                    <li>Men Jackets</li>
                    <li>Men Shoes</li>
                    <li>Men Accessories</li>
                </ul>
            </div>

            <div class="col-md-3">
                <div class="header-6">
                    <p>Download Our Application</p>
                </div>
                <ul>
                    <li><button class="btn2"><img src="images/26.png" height="25px"> App Store</button></li>
                    <li><button class="btn2"><img src="images/27.png" height="25px"> Google Play</button></li>
                </ul>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>