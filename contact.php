<?php

$message_sent = false;

if(isset($_POST['Email']) && $_POST['Email'] != ''){

  if( filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL) ){


  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $subject = $_POST['Subject'];
  $message = $_POST['Message'];

  $to = "crimzonblue38@hotmail.com";
  $body = "";

  $body .= "From: ".$name. "\r\n";
  $body .= "Email: ".$email. "\r\n";
  $body .= "Message: ".$message. "\r\n";

  mail($to,$subject,$body);

  $message_sent = true;
}

else{

  $invalid_class_name = "form-invalid";
}

}

?>













<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Aseertime</title>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/Allcss.css">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
        <a class="navbar-brand" href="index.html">
            <img src="assets\images\ATlogo.png" alt="Aseertime logo" title="Your logo" style="height:35px;" /> Aseertime
        </a>   
   
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" 
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="menu.html">Menu</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="contact.php">Contact</a>
                  </li>
              </ul>
          </div>
          
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container py-1">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!--/header-->

<div class="inner-banner">
</div>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
        </ul>
    </div>
</section>
<!-- /contact-form -->
<section class="w3l-contact-6 py-5" id="contact">
    <div class="contact-info  py-lg-4 py-md-3">
        <div class="container">
            <div class="title-content mb-5">
                <h3 class="title-big text-center mb-5" id="contactus2">Get in touch with us</h3>
            </div>
            <div class="grid contact-grids pt-3">
                <div class="contact-left">
                    <div class="grid">
                        <span class="fa fa-map-marker"></span>
                        <div class="location-info">
                            <span>Address</span>
                            <p> Beside Al Hosen Oud, Near Etihad Studio </p>
                            <p>Airport Road, Al Mushrif,</p>
                            <p>United Arab Emirates, Abu Dhabi.</p>
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-envelope-o"></span>
                        <div class="email-info">
                            <span>Have any Questions?</span>
                            <a href="mailto:juicetime.franchise@gmail.com"> juicetime.franchise@gmail.com</a>
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-phone"></span>
                        <div class="email-info">
                            <span>Phone Number</span>
                            <a href="tel:02-666-8118"> 02-666-8118</a>
                        </div>
                    </div>
                </div>
                      <?php

              if($message_sent):
                ?>
<h3 class="title-big text-center mb-5" id="submission">Your form has been submitted!</h3>

<?php
else:
?>

                <div class="contacts12-main">
                    <form action="contact.php" method="POST" class="signin-form">
                        <div class="input-grids">
                            <div>
                                <label class="form-field" for="Name">Name</label>
                                <input type="text" name="Name" id="Name" placeholder="e.g. Abdullah Ahmad"
                                    class="contact-input" />
                            </div>
                            <div>
                                <label class="form-field" for="Email">Email Address</label class="form-field">
                                <input type="email" name="Email" id="Email" placeholder="e.g. example@mail.com"
                                    class="contact-input" <?= $invalid_class_name ?? ""?> />
                            </div>
                        </div>

                        <div>
                            <label class="form-field" for="Subject">Subject</label class="form-field">
                            <input type="text" name="Subject" id="Subject" placeholder="e.g. Subject"
                                class="contact-input" />
                        </div>
                        <div>
                            <label class="form-field" for="Message">Message</label class="form-field">
                            <textarea name="Message" id="Message" placeholder="Please type your message here, we always appreciate feedback from our customers!"
                                ></textarea>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-style btn-primary Submit" name="submit1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
endif;
        ?>
</section>
<!-- //contact-form -->
<!-- /contact-map -->

<!-- //contact-map -->
<section class="w3l-footer-29-main py-5">
  <div class="footer-29 py-lg-4 py-md-3">
      <div class="container">
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">Contact Us</h6>
                  <ul>
                      <li><a href="https://www.google.com/maps/place/Asser+Time/@24.4699511,54.3715244,14z/data=!4m5!3m4!1s0x3e5e68867d49d40b:0xcb9cb8fa5b6b6770!8m2!3d24.4549873!4d54.3856663"><span class="fa fa-map-marker"></span> Beside Al Hosen Oud, Near Etihad Studio, Airport Road, Al Mushrif, Abu Dhabi.</a></li>
                      <li><a href="tel:02-666-8118"><span class="fa fa-phone"></span> 02-666-8118</a></li>
                      <li><a href="mailto:juicetime.franchise@gmail.com" class="mail"><span class="fa fa-envelope-open-o"></span> juicetime.franchise@gmail.com</a></li>
                  </ul>
                  <div class="main-social-footer-29">
                      <a href="https://www.facebook.com/pages/category/Brand/Aseer-Time-Abu-Dhabi-161836964586399/" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="https://www.instagram.com/39ertime_uae/" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="https://www.youtube.com/channel/UCJ54HcdexYR8iEU4vYivMsg" class="youtube"><span class="fa fa-youtube"></span></a>
                  </div>
              </div>
              
              <div class="footer-list-29 footer-3">
                  <ul>
                      <h6 class="footer-title-29">Quick Links</h6>
                      <li><a href="index.html">Home Page</a></li>
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="menu.html">Our Menu</a></li>
                      <li><a href="contact.php">Contact Us</a></li>
                  </ul>
              </div>
          </div>
          <div class="d-grid grid-col-2 bottom-copies">
              <p class="copy-footer-29">© 2020 Aseer time. All rights reserved</p>
          </div>
      </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- script for testimonials -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for testimonials -->

<script src="assets/js/theme-change.js"></script>

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>