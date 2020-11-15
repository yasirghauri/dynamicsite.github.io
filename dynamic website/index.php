<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">
</head>
<body>
    <?php include 'menu.php';?>
    <!-- //carousal -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/cc1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/cc2.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/cc3.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- carousal end -->
    <!-- About Us starts -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/abc.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am a Graphic Designer</h2>
                    <p class="py-3">It is a long established fact that a reader will be distracted by the ong
                        established fact thareadable content of a page when looking at its layout. </p>
                    <a href="about.php" class="btn btn-success">Check More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About us End -->
    <!-- Our Service Start -->
    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Our Services</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/cc6.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/cc8.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">

                    <div class="card">
                        <img class="card-img-top" src="images/cc9.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful Nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- Our Service End -->
   <!-- Gallery Section Start -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc7.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/one.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/two.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/three.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/four.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/five.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/six.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/seven.jpg" class="img-fluid pb-4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/eight.jpg" class="img-fluid pb-4">
                </div>
           </div>
        </div>
    </section>
    <!-- Gallery Section End -->
    <!-- Contact Form Start -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Form</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="POST">
                <div class="form-group">
                    <label>UserName</label>
                    <input type="tex" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="tex" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="tex" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea name="comment" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit
                </button>
            </form>
        </div>
    </section>
    <!-- Contact Form End here -->
    <footer>
        <p class="p-3 bg-dark text-white text-center">@mynewwebsiteproductions</p>
    </footer>










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>