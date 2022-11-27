<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daffodil Laptop Management||Registration</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand text-white" href="home.php">DIU LAPTOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
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
                    <a class="nav-link btn btn-primary text-white" type="button" href="login.php">Sign In</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link btn btn-danger text-white" type="button" href="registration.php">Register</a>
                </li>
            </ul>
        </div>

        <!-- The Modal -->



    </nav>

    <form action="php/checkRegister.php" method="post">
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-5 d-none d-flex justify-content-center align-items-center">
                    <img src="img/registration.png"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-7">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Student registration form</h3>
                      <?php if(isset($_GET['error'])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?=$_GET['error']?>
                                </div>
                                <?php }?>
                                <?php if(isset($_GET['success'])) { ?>
                                <div class="alert alert-success" role="alert">
                                    <?=$_GET['success']?>
                                </div>
                                <?php }?>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="fname">First name</label>
                            <input type="text" id="fname" name="fname" class="form-control form-control-lg" />
                            
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            
                            <label class="form-label" for="lname">Last name</label>
                            <input type="text" id="lname" name="lname" class="form-control form-control-lg" />
                          </div>
                        </div>
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            
                            <label class="form-label" for="email">Email Address</label>
                            <input type="text" id="email" name="email" class="form-control form-control-lg" />
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="number">Phone Number</label>
                            <input type="text" id="number" name="number" class="form-control form-control-lg" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="form-outline">
                            
                            <label class="form-label" for="password">Password</label>
                            <input type="text" id="password" name="password" class="form-control form-control-lg" />
                          </div>
                        </div>

                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Gender: &nbsp;</h6>

                              
                        <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" value="male" type="radio" name="gender" id="maleGender"
                            />
                            <label class="form-check-label"  for="maleGender">Male</label>
                          </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="female" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>

      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" value="other" name="gender" id="otherGender"
                             />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4" >
      
                          <select class="select" name="semester">
                            <option selected value="Summer-2020">Summer-2020</option>
                            <option value="Spring-2020">Spring-2020</option>
                            <option value="Fall-2020">Fall-2020</option>
                          </select>
      
                        </div>

                      </div>
      
                      <div class="d-flex justify-content-end pt-3">
                        <button type="submit" class="btn btn-warning btn-lg ms-2">REGISTER</button>
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    </form>

    
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