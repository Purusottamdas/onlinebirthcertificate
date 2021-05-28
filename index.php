<?php

$login=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $userId=$_POST["userid"];
  $username=$_POST["username"];
  $password=$_POST["password"];
  $type=$_POST["type"];

  if($type==1)
  {

  }

  else if($type==2)
  {
    
        include 'partials/_dbconnect.php';

        //cholders Login
        $sql="Select * FROM cholders where userid='$userId' AND username='$username' AND password='$password'";
        $result=mysqli_query($conn,$sql);

        $databasedata=mysqli_fetch_assoc($result);
        /* echo  $databasedata['username'];
         echo $_POST["type"];*/


        if(($username==$databasedata['username'])&& ($password==$databasedata['password'])&&($userId==$databasedata['userid']))
        {
         echo "Connected successfully";
          $login=true;
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['usernamen']=$username;
          if(isset($_SESSION['loggedin']))
          {
          header("location: dashboard2.php");
          exit();
          }
        }
        else{
          echo "hello check";
          $showError=true;
          session_start();
        }
  }
}
else
{


}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Website Title -->
  <title>E-Birth Certificate</title>

  <!-- SEO Meta Tags -->
  <meta name="description" content="E-Birth Certificate">
  <meta name="author" content="owshnik">

  <!-- Google Fonts -->
  <!--
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="style.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="images/1.png" rel="icon">

</head>

<body>
  <!-- ======= Preloader ======= -->
  <!--
    <div id="preloader">
        <img src="images/Spinner.gif" alt="">
    </div>
  -->

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> <a>+916589554885</a>
      </div>
      <div class="d-none d-sm-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <div id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-md-between">
      <a href="index.html" class="logo d-none d-lg-block"><img src="images/national-health-mission-logo.png" alt=""
          class="img-fluid"></a>
      <h1 class="logo me-auto me-lg-0 d-block d-lg-none"><a href="demo.html"><b>OnlineBirthCertificate</b></a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero"><b>HOME</b></a></li>
          <li><a class="nav-link scrollto" href="#features"><b>FEATURES</b></a></li>
          <li><a class="nav-link scrollto" href="#about"><b>ABOUT</b></a></li>
          <li><a class="nav-link scrollto" href="#team"><b>TEAM</b></a></li>
          <li><a class="nav-link scrollto" href="#contact"><b>CONTACT</b></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" class="login-button scrollto"><b>SIGN
          IN</b></a>
    </div>
  </div>

  <!-- Login form -->
  <div class="modal fade justify-content-center" id="exampleModalToggle" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header justify-content-lg-between justify-content-center" style="border: 0px;">
          <div class="row no-gutters">
            <div class="col-12 d-flex" id="login">
              <div class="col-lg-6 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                      aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                      aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                      aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/11.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <p><i class="fas fa-quote-left pr-3"></i> The family is one of
                          nature’s masterpieces. <i class="fas fa-quote-right pl-3"></i>
                        </p>
                        <b><small>____George <span>Santayana</span> </small></b>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/12.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <p><i class="fas fa-quote-left pr-3"></i> Other things may change
                          us, but we start and end with the family. <i class="fas fa-quote-right pl-3"></i></p>
                        <b><small>____Anthony <span>Brandt</span> </small></b>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/13.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <p><i class="fas fa-quote-left pr-3"></i> Family is not an important
                          thing. It’s just everything. <i class="fas fa-quote-right pl-3"></i>
                        </p>
                        <b><small>____Michael <span>J. Fox</span> </small></b>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-12 py-lg-5" style="padding-right: 14px;">
                <div class="login-wrap mt-lg-5 mt-1 py-lg-2">
                  <div class="d-flex mb-lg-1">
                    <div class="w-100">
                      <h3 class="mb-4"><b>Sign In Now : )</b></h3>
                    </div>
                    <div class="w-100 mt-lg-4 d-none d-sm-block">
                      <p class="social-media d-flex justify-content-end">
                        <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                          <i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                          <i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                          <i class="fab fa-twitter"></i></a>
                      </p>
                    </div>
                  </div>
                  <form action="/loginsystems/onlinebirthcertificate.com/index.php" class="signin-form" method="post">
                    
                    <div class="form-group mb-4">
                      <label class="label" for="name">UserID</label>
                      <input type="text" class="form-control" placeholder="UserID" name="userid" required>
                    </div>
                    <div class="form-group mb-4">
                      <label class="label" for="name">Username</label>
                      <input type="text" class="form-control" placeholder="Username" name="username" required>
                    </div>
                    <div class="form-group mb-4">
                      <label class="label" for="password">Password</label>
                      <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>


                    <div class="input-group justify-content-center mb-4">
                      <select class="form-slt form-select-sm" aria-label=".form-select-sm example" name="type">
                        <option selected>Select Your type</option>
                        <option value="1">Municipality/Panchayat/Hospital</option>
                        <option value="2">Parents/Others</option>
                      </select>
                    </div>

                    <div class="form-group mb-2">
                      <button type="submit" class="form-control btn rounded submit px-3" style="color: #012970;"><b>Sign
                          In</b></button>
                    </div>
                    <div class="form-group d-md-flex justify-content-center mb-0">
                      <p><a href="#" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                          data-bs-dismiss="modal" class="lost-pass-btn"><b>Lost Your
                            Password ? : (</b></a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="align-self-start" id="close-button"><i class="bi bi-x" data-bs-dismiss="modal"
              aria-label="Close"></i></a>
        </div>
      </div>
    </div>
  </div>


  <!-- Forget password form -->
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="border: 0px;">
          <div class="row no-gutters">
            <div class="col-12 forgetpass-from">
              <div class="forgetpass-group mb-3 d-block">
                <div class="input-group mb-3">
                  <div class="input-group-text"><i class="bi">#</i></div>
                    <input type="idnumber" class="form-control" placeholder="Enter Your ID Number"
                    aria-label="Recipient's username">
                  <button class="btn" type="button" style="color: #012970;">CLICK ME</button>
                </div>
              </div>
              <div class="exception mb-3 offset-6">
                <i><b>Or,</b></i>
              </div>
              <div class="forgetpass-group mb-3 d-block">
                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                    </div>
                    <input type="email" class="form-control" placeholder="Enter Your Email Address"
                      aria-describedby="emailHelp">
                  <button class="btn" type="button" style="color: #012970;">CLICK ME</button>
                </div>
              </div>
              <div class="exception mb-3 offset-6">
                <i><b>Or,</b></i>
              </div>
              <div class="forgetpass-group mb-3 d-block">
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                      <div class="input-group-text"><i class="bi bi-phone-vibrate"></i></div>
                    </div>
                    <input type="tel" class="form-control" placeholder="Enter Your Phone Number"
                      aria-label="Recipient's username">
                  <button class="btn" type="button" style="color: #012970;">CLICK ME</button>
                </div>
              </div>
              <div class="forgetpass-group d-flex justify-content-center">
                <p><a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"
                    class="register-btn"><b>Log In NOW!!</b></a></p>
              </div>
            </div>
          </div>
          <a href="#" class="align-self-start" id="close-button"><i class="bi bi-x" data-bs-dismiss="modal"
              aria-label="Close"></i></a>
        </div>
      </div>
    </div>
  </div>


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(images/2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>Lorem</span></h2>
              <p class="animated fadeInUp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste nisi itaque
                dicta quos incidunt quidem porro repudiandae, voluptates sint dolorum iure quae aspernatur hic ipsum
                autem obcaecati perferendis recusandae fugit.</p>
              <a href="#features" class="btn animated fadeInUp scrollto"><b>Read More</b></a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(images/3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animated fadeInUp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste nisi itaque
                dicta quos incidunt quidem porro repudiandae, voluptates sint dolorum iure quae aspernatur hic ipsum
                autem obcaecati perferendis recusandae fugit.</p>
              <a href="#features" class="btn animated fadeInUp scrollto"><b>Read More</b></a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(images/4.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Lorem ipsum dolor</h2>
              <p class="animated fadeInUp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste nisi itaque
                dicta quos incidunt quidem porro repudiandae, voluptates sint dolorum iure quae aspernatur hic ipsum
                autem obcaecati perferendis recusandae fugit.</p>
              <a href="#features" class="btn animated fadeInUp scrollto"><b>Read More</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= carousel Captions =======
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000" id="headeritem">
        <img src="images/2.jpg" class="d-block w-100" alt="First slide">
        <div class="carousel-caption d-md-block" id="headercaption">
          <h5 class="animate__animated animate__flipInX animate__delay-1s">WELCOME</h5>
          <p class="animate__animated animate__zoomIn animate__delay-2s">HOW CAN I HELP YOU?</p>
          <p class="animate__animated animate__zoomIn animate__delay-2s">...</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000" id="headeritem">
        <img src="images/3.png" class="d-block w-100" alt="Second slide">
        <div class="carousel-caption d-md-block" id="headercaption">
          <h5 class="animate__animated animate__flipInX animate__delay-1s">GET YOUR BIRTHCERTIFICATE</h5>
          <p class="animate__animated animate__zoomIn animate__delay-2s">ANYTIME,ANYWHERE</p>
          <p class="animate__animated animate__zoomIn animate__delay-2s">...</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="800" id="headeritem">
        <img src="images/4.jpg" class="d-block w-100" alt="Third slide">
        <div class="carousel-caption d-md-block" id="headercaption">
          <h5 class="animate__animated animate__flipInX animate__delay-1s">Third slide label</h5>
          <p class="animate__animated animate__zoomIn animate__delay-2s">Some representative placeholder
            content
            for the third slide.</p>
          <p class="animate__animated animate__zoomIn animate__delay-2s">...</p>
        </div>
      </div>
    </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
  </div>
-->

  <!-- ======= Features Section ======= -->
  <section class="features" id="features">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Our Services</h2>
        <p>Get any of these anytime anywhere</p>
      </header>
      <div class="row">
        <div class="col-lg-6">
          <img src="images/5.jpg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Online Birth Certificate</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Birth Certificate Correction</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Birth Certificate of those who are Adopted</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Birth Certificate for those who take birth at Home</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Virtual Birth Certificate</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>24*7 Helpline Available</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= About Section ======= -->
  <section class="about" id="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="offset-lg-1 col-lg-5 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="images/7.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>A Birth Certificate is a crucial document that is given to each individual at the time of their birth.
            It
            has significant details about them like their parent’s details,their nationality,location and
            many more.</h3>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae harum
              excepturi doloremque provident, neque possimus dolorem?</li>
            <li><i class="bi bi-check-circle"></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
              reprehenderit voluptate quisquam, enim nam, tempore eveniet, deleniti repellat sed nihil corporis! Vitae
              praesentium, ratione hic delectus similique possimus aperiam obcaecati.</li>
            <li><i class="bi bi-check-circle"></i> Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </li>
          </ul>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vitae sapiente quos, praesentium eligendi
            error veritatis cumque rerum voluptatum necessitatibus hic tempore maxime recusandae porro similique
            laboriosam odit, adipisci quis?
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Team</h2>
        <p>Our hard working team</p>
      </header>
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="images/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://twitter.com/Shniki_Boy___"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/owshnik.ghosh.9/"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/shniki_boy____/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/owshnik-ghosh/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Owshnik Ghosh</h4>
              <span>Bootstrap,CSS and SQL</span>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae odio, aut unde magnam natus quae
                eligendi aliquam. Totam quas laborum alias eos aut, neque nemo dolorem ducimus aliquam, numquam earum.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="member-img">
              <img src="images/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Tiyasha Manna</h4>
              <span>Leader</span>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae odio, aut unde magnam natus quae
                eligendi aliquam. Totam quas laborum alias eos aut, neque nemo dolorem ducimus aliquam, numquam earum.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-img">
              <img src="images/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Purusottam Das</h4>
              <span>CTO</span>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae odio, aut unde magnam natus quae
                eligendi aliquam. Totam quas laborum alias eos aut, neque nemo dolorem ducimus aliquam, numquam earum.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <div class="member-img">
              <img src="images/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Ayusha Dasgupta</h4>
              <span>Accountant</span>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae odio, aut unde magnam natus quae
                eligendi aliquam. Totam quas laborum alias eos aut, neque nemo dolorem ducimus aliquam, numquam earum.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="300">
      <header class="section-header">
        <h2>Communication</h2>
        <p>Contact Us</p>
      </header>

      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="row gy-4">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>Near Water Tank, 168/3,Rishi Arabinda Sarani,Birati,<br>Kolkata:- 700051</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="800">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+91 7589554885<br>+91 66782544454</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="1000">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info.birthcertificate@gmail.com<br>onlinebirthcertificate@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="1200">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>10:00AM - 07:00PM</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="images/logo.png" alt="">
              <span>onlinebirthcertificate</span>
            </a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident ut itaque quos perspiciatis quo amet
              magnam cupiditate inventore facilis? Placeat corporis nostrum odit qui fugit molestias obcaecati alias
              tempore numquam.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Go To</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#features">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#login">Log In</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Other Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Near Water Tank, 168/3,Rishi Arabinda Sarani,Birati <br>
              Kolkata:- 700051<br>
              INDIA <br><br>
              <strong>Phone:</strong> info.birthcertificate@gmail.com<br>
              <strong>Email:</strong> +91 66782544454<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>onlinebirthcertificate</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Owshnik Ghosh</a>
      </div>
    </div>
  </footer>

  <a href="#hero" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Scripts  -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Main JS File -->
  <script src="main.js"></script>

</body>

</html>