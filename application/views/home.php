<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Balaji Bathini</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- /web fonts -->
</head>

<body>
  <?php 
    if($this->session->flashdata('response') == true){ ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hurray!</strong> Your response has been successfully saved in our database.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   <?php } ?>
  <!-- header -->
  <header class="w3l-header">
    <div class="hero-header-11">
      <div class="hero-header-11-content">
        <div class="container">
          <nav class="navbar navbar-expand-xl navbar-light py-sm-2 py-1 px-0">
            <a class="navbar-brand editContent" href="<?php echo base_url(); ?>">BB's Portfolio</a>
            <!-- if logo is image enable this   
				<a class="navbar-brand" href="#index.html">
						<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> -->  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- //header -->
  <!--  Main banner section -->
  <section class="w3l-main-banner">
    <div class="companies20-content">
      <div class="companies-wrapper">
        <div class="item">
          <li>
            <div class="slider-info banner-view">
              <div class="banner-info container">
                <h3 class="banner-text"><small>Hello, I’m</small><br>
                  Balaji Bathini
                </h3>
                <p class="my-4 mb-5">Web Developer</p><br>
                <a href="#gallery" class="btn btn-primary theme-button mr-3">My Work</a>
                <a href="#contact" class="btn btn-outline-primary theme-button">Hire Me</a>
              </div>
            </div>
          </li>
        </div>
      </div>
    </div>
  </section>
  <!--  //Main banner section -->
  <!--  About section -->
  <div class="w3l-about1 pt-5" id="about">
    <div class="container pt-lg-3 pb-5">
      <h3 class="global-title">About Me</h3>
      <div class="aboutgrids row">
        <div class="col-lg-4 aboutgrid2">
          <img src="<?php echo base_url(); ?>assets/images/bala2.jpg" style="height: 500px;" alt="about image" class="img-fluid" />
        </div>
        <div class="col-lg-8 align-self-center aboutgrid1 my-lg-0 my-5">
          <h4>Why hire me for your project?</h4>
          <p>A highly motivated and dedicated full stack developer with a strong foundation in programming languages and 
            frameworks such as HTML, CSS, JavaScript, Angular, Node.js, Java, and Python. Excited to begin a career 
            in full stack development and contribute to innovative and dynamic web applications. Possessing excellent 
            problem-solving skills, the ability to work collaboratively, and a passion for staying up-to-date with the 
            latest industry trends and technologies.</p>

          <a href="<?php echo base_url(); ?>assets/files/Balaji-Bathini-CV.docx" class="btn btn-outline-primary p-3">Download CV</a>
        </div>
      </div>
    </div>

    <div class="aboutbottom py-5">
      <div class="container py-lg-3">
        <div class="bottomgrids row">
         
          <div class="col-md-6 bottomgrid1 mt-md-0 mt-5">
            <h4>Frontend</h4>
            <p>As a frontend developer, my primary responsibilities would include designing and 
              implementing the user interface, creating the layout and structure of web pages, and 
              ensuring that the user experience is smooth and intuitive.</p>
          </div>
          <div class="col-md-6 bottomgrid1 mt-lg-0 mt-5">
            <h4>Backend</h4>
            <p>As a backend developer, my primary responsibilities would include designing and implementing 
              the server-side logic, building the application's API, managing databases, and ensuring that the 
              application is scalable and secure.</p>
          </div>
        
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
  </div>
  <!--  //About section -->

  <!--  Work gallery section -->
  <div class="w3l-gallery2" id="gallery">
    <div class="insta-picks py-5">
      <div class="container py-lg-5">
        <h3 class="global-title">Latest Certifications</h3>
        <div class="row masonry">
          <div class="col-md-4 col-sm-6 brick">
            <a href="<?php echo base_url(); ?>assets/certificates/salesforce.pdf">
              <img src="<?php echo base_url(); ?>assets/certificates/salesforce.png" class="img-fluid insta-pic" alt="insta-pic" />
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="<?php echo base_url(); ?>assets/certificates/Accenture _developer-virtual-experience-program.pdf">
              <img src="<?php echo base_url(); ?>assets/certificates/Accenture _developer-virtual-experience-program.png" class="img-fluid insta-pic" alt="insta-pic" />
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="<?php echo base_url(); ?>assets/certificates/Data Visualization Certificate.pdf">
              <img src="<?php echo base_url(); ?>assets/certificates/Data Visualization Certificate.png" class="img-fluid insta-pic" alt="insta-pic" />
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="<?php echo base_url(); ?>assets/certificates/data scientist.pdf">
              <img src="<?php echo base_url(); ?>assets/certificates/data scientist.png" class="img-fluid insta-pic" alt="insta-pic" />
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="<?php echo base_url(); ?>assets/certificates/power bi.pdf">
              <img src="<?php echo base_url(); ?>assets/certificates/power bi.png" class="img-fluid insta-pic" alt="insta-pic" />
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="<?php echo base_url(); ?>assets/certificates/Coursera-Meta-Frontend-Developer.pdf">
              <img src="<?php echo base_url(); ?>assets/certificates/Coursera-Meta-Frontend-Developer.png" class="img-fluid insta-pic" alt="insta-pic" />
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="<?php echo base_url(); ?>assets/certificates/workshop.jpg">
              <img src="<?php echo base_url(); ?>assets/certificates/workshop.jpg" class="img-fluid insta-pic" alt="insta-pic" />
            </a>
          </div>
        </div>
        <div class="text-center">
          <a href="https://www.instagram.com/balajijr_03" class="follow-insta-button btn btn-secondary p-3 mt-5" target="_blank">
            Follow me on Instagram
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--  //Work gallery section -->
  <!--  Intro video popup section -->
  <section class="w3l-index5" id="intro">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <h2>Imagination is more important than knowledge</h2>
          </div>
          <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center">
            <span class="video-play-icon">
              <span class="fa fa-play"></span>
            </span>
          </a>

          <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
          <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
            <iframe src="https://www.youtube.com/embed/oWP9Riq-ZBg" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //Intro video popup section -->
  <!--  Fun facts section -->
  <section class="w3l-index2">
    <div class="main-w3 py-5" id="stats">
      <div class="container py-lg-3">
        <h3 class="global-title">Fun Facts</h3>
        <div class="row main-cont-wthree-fea text-center">
          <div class="col-lg-3 col-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-tasks" aria-hidden="true"></span>
              <h3 class="title-spe">2+</h3>
              <p>Projects Done</p>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-users" aria-hidden="true"></span>
              <h3 class="title-spe">10+</h3>
              <p> Community contribute</p>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-certificate" aria-hidden="true"></span>
              <h3 class="title-spe">7</h3>
              <p>Certifications</p>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-trophy" aria-hidden="true"></span>
              <h3 class="title-spe">0</h3>
              <p>Awards Own</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--  //Fun facts section -->

  <!-- Contact section -->
  <section class="w3l-contact py-5" id="contact">
    <div class="container py-lg-3">
      <h3 class="global-title">Drop me a Message</h3>
      <div class="row">
        <div class="col-md-8 contact-form">
          <form  method="post" action="<?php echo base_url(); ?>submit-details">
            <div class="mb-3">
              <input type="text" class="form-control" name="name" placeholder="Name" required/>
            </div>
            <div class="mb-3">
              <input type="text" pattern="[0-9]{10}" title="Please Enter a valid mobile number" class="form-control" name="contact" placeholder="Contact" required/>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="E-mail" required />
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required/>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="message" placeholder="Your Message" style="height:150px;"></textarea>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary theme-button" type="submit">Send</button>
            </div>
          </form>
        </div>
        <div class="col-md-4 mt-md-0 mt-5 w3-contact-address">
          <b>Address:</b>
          <p>4-21-50/A,</p>
          <p>Govind Nagar,</p>
          <p>Tirupati,AndhraPradesh</p>
          <p>India - 517501.</p>
          <br />
          <b>Phone:</b>
          <p><a href="tel:+11-22-55-66-05">+91 779-900-8125</p>
          <!-- <p><a href="tel:+11-22-55-66-06">+11-22-55-66-06</p> -->
          <br />
          <b>Email:</b>
          <p><a href="mailto:balajijr007@gmail.com">balajijr007@gmail.com</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- //Contact section -->
  <!-- Footer -->
  <footer class="w3l-footer">
    <div id="footers14-block" class="py-3">
      <div class="container">
        <div class="footers14-bottom text-center">
          <div class="social">
            <a href="mailto:balajijr007@gmail.com" target="_blank" class="google"><span class="fa fa-google" aria-hidden="true"></span></a>
            <a href="https://www.twitter.com/BalajiJr5" target="_blank" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            <a href="https://www.instagram.com/balajijr_03" target="_blank" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
            <a href="https://youtube.com/@balajijr1354" target="_blank" class="youtube"><span class="fa fa-youtube" aria-hidden="true"></span></a>
          </div>
          <div class="copyright mt-1">
            <p>© 2023 Balaji Bathini. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up" aria-hidden="true"></span>
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

  </footer>
  <!-- Footer -->

  <!-- jQuery and Bootstrap JS -->
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  <!-- Template JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->


  <script src="<?php echo base_url(); ?>assets/js/smartphoto.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const sm = new SmartPhoto(".js-img-viwer", {
        showAnimation: false
      });
      // sm.destroy();
    });
  </script>


</body>

</html>
