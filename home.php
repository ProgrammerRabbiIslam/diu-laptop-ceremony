<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daffodil Laptop Management</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">

</head>

<body>


    <div class="">

        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <a class=" navbar-brand text-white" href="home.php">
                <img style="height: 40px; width: 40px;" class="logoImage" src="img/logo.png" alt="logo" srcset="">
                <span style="color:#00aeff ;font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">DIU LAPTOP</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto topnav">
                    <li class="nav-item active">
                        <a class="nav-link " href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#photoGallerySection">Photo Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#videoGallerySection">Video Gallery</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Event
                        </a>
                        <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">New Event</a>
                            <a class="dropdown-item" href="#">Old Event</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Upcoming Event</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" type="button" href="login.php" >Sign In</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link btn btn-danger text-white" type="button" href="registration.php" 
                            >Register</a>
                    </li>
                </ul>
            </div>




        </nav>

        <!-- Image slider Section -->
        <div class="laptopHeaderImage">
            <img class="lImage" src="img/laptopHeader.jpg" alt="">
        </div>

        <!-- Photo gallery -->
        <section id="photoGallerySection">
        <div class="photoGallery">
            <h2 style="font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="text-white">PHOTO GALLERY</h2>
        </div>
        <div id="carouselExampleIndicators" class=" container slider carousel slide mt-4" data-interval="3000"
            data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="slider-image d-block w-100" src="img/slider1.JPG" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="slider-image d-block w-100" src="img/slider2.JPG" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="slider-image d-block w-100" src="img/slider3.JPG" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="slider-image d-block w-100" src="img/slider5.JPG" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</section>


 <section id="videoGallerySection">
    <div class="videoGallery">
        <h2 style="font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="text-white text-center mt-3 mb-3">VIDEO GALLERY</h2>
    </div>
    <div class="container" itemprop="articleBody">

        <table class="table table-bordered table-hover">
            <tr>
                <td><iframe src="https://drive.google.com/file/d/1xrgI4HluZkdOmbn0viRzLhXIndAUTruI/preview" width="560"
                        height="315" allow="autoplay"></iframe></td>
                <td><iframe src="https://drive.google.com/file/d/1EWa_xuBdv8RcSRiegAnww-alZApyXxVz/preview" width="560"
                        height="315" allow="autoplay"></iframe></td>
            </tr>
            <tr class="text-center">
                <td colspan="2">
                    <p>
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/GevSd8BGYyw"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </p>
                </td>
            </tr>
        </table>
    </div>
  </section>
    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://diulaptop.com/">diulaptop.com</a>
        </div>
        <!-- Copyright -->
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>

</body>

</html>