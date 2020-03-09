<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CitizenshipSimple - Pass the Canadian Citizenship Test</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
    <!-- Google fonts - Source Sans Pro-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <!-- Swiper sLider-->
    <!-- theme stylesheet-->
    <!-- Custom stylesheet - for your changes-->
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
		<style>
		body {
  font-family: "Source Sans Pro", sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
}
.hero {
  padding: 6.25rem 0;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 700;
  line-height: 1.2;
  color: inherit;
}
h1,
.h1 {
  font-size: 3.75rem;
}

h2,
.h2 {
  font-size: 2.8rem;
}

h3,
.h3 {
  font-size: 2rem;
}

h4,
.h4 {
  font-size: 1.7rem;
}

h5,
.h5 {
  font-size: 1.4rem;
}

h6,
.h6 {
  font-size: 1rem;
}

		/***** The important stuff *****/
.underline{position: relative;}
.underline:before {
  content: "";
  position:relative;
  width:100%;
  height: 2.45em;
  left: 0;
  width: 100%;
  z-index:-10;
  background-image: url('https://res.cloudinary.com/dztuxvl4l/image/upload/v1561346293/unitingline-anim_tje077_hdw2p5.svg');
  background-repeat: no-repeat;	
  background-size: 100% 100%;
    transition: width 0.5s cubic-bezier(0.22, 0.61, 0.36, 1);
}
.underline:after {
  content: "";
  position:absolute;
  width:100%;
  height: 2.45em;
  left: 0;
  width: 100%;
  z-index:-10;
  background-image: url('https://res.cloudinary.com/dztuxvl4l/image/upload/v1561346293/unitingline-anim_tje077_hdw2p5.svg');
  background-repeat: no-repeat;	
  background-size: 100% 100%;
    transition: width 0.5s cubic-bezier(0.22, 0.61, 0.36, 1);
}
video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: auto;
}

.canada {
  width: 320px!important;
  height: 170px!important;
  margin: auto;
  background: #d35f5f;
  background-image: url(img/canada.gif);
  background-size: cover;
  -webkit-clip-path: polygon(50% 9%, 54% 23%, 58% 20%, 56% 43%, 61% 32%, 63% 38%, 69% 36%, 67% 48%, 70% 52%, 60% 68%, 60% 75%, 51% 73%, 51% 93%, 49% 93%, 49% 73%, 40% 75%, 40% 68%, 30% 52%, 33% 49%, 31% 36%, 37% 38%, 38% 32%, 44% 42%, 42% 20%, 46% 23%);
  clip-path: polygon(50% 9%, 54% 23%, 58% 20%, 56% 43%, 61% 32%, 63% 38%, 69% 36%, 67% 48%, 70% 52%, 60% 68%, 60% 75%, 51% 73%, 51% 93%, 49% 93%, 49% 73%, 40% 75%, 40% 68%, 30% 52%, 33% 49%, 31% 36%, 37% 38%, 38% 32%, 44% 42%, 42% 20%, 46% 23%);
  -webkit-box-shadow: 0px 0px 77px -15px rgba(0,0,0,0.52);
-moz-box-shadow: 0px 0px 77px -15px rgba(0,0,0,0.52);
box-shadow: 0px 0px 77px -15px rgba(0,0,0,0.52);
}
.containerd{
	margin: auto;
      width: 250px;
    background-color: #fff;
	  background-image: url(img/canada.gif);
	    background-size: cover;
  background-blend-mode: multiply;

    height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 2rem;
    color: white;
    font-family: roboto;
    font-weight: bold;
  position:relative;
}

.containerd::before, .containerd::after
{
  position: absolute;
  content : "";
  top: -5%;
  left: -5%;
  height:110%;
  width:110%;
  border-radius:50%;
  opacity:0.5;
  filter: blur(60px);
}


.containerd::after
{
    background-color:#00ffff;
   z-index: -1;
  animation : backglow2 15s ease infinite;
}

.containerd::before
{
    background-color:#ff0072;
   z-index: -2;
  animation : backglow1 15s ease infinite;
}




@keyframes backglow1
{
  
  0%
  {
    transform: translate(10%, 10%) scale(1);
    opacity:0.5;
  }
  
   25%
  {
    transform: translate(-10%, 10%) scale(0.8);
    opacity:0.5;
  }
  
   50%
  {
    transform: translate(-10%, -10%) scale(1.2);
    opacity:0.8;
  }
  
   75%
  {
    transform: translate(10%, -10%) scale(1.1);
    opacity:0.2;
  }
  
   100%
  {
    transform: translate(10%, 10%) scale(1);
    opacity:0.5;
  }
  
  
}





@keyframes backglow2
{
  
  0%
  {
    transform: translate(-10%, -10%) scale(1);
    opacity:0.5;
  }
  
   25%
  {
    transform: translate(10%, -10%) scale(0.8);
    opacity:0.5;
  }
  
   50%
  {
    transform: translate(10%, 10%) scale(1.2);
    opacity:0.8;
  }
  
   75%
  {
    transform: translate(-10%, 10%) scale(1.1);
    opacity:0.2;
  }
  
   100%
  {
    transform: translate(-10%, -10%) scale(1);
    opacity:0.5;
  }
  
  
}
.red-background {
  position: relative;
  display: block;
  margin: auto;
  margin-top: 4%;
  height: 200px;
  width: 100%;
  max-width: 500px;
  background: red;
}

.white-box {
  height: 100%;
  position: absolute;
  background: white;
  width: 46%;
  left: 27%;
}
.padding-big {
  padding: 2.75rem 0;
}
.btn-width{min-width: 300px;}
		</style>
  </head>
  <body>
  @include('header')

   
    <div class="page-holder">
      <!-- Hero Section-->
      <section class="hero">
        <div class="container">
          <div class="row align-items-center dark-grey-text">
            <div class="col-lg-12 text-center">

  <img src="img/maple_leaf.png" style="max-width: 300px;margin: auto; margin-bottom: 35px;" />
 
              <h1 class="text-center font-weight-normal">Pass the <strong>Citizenship Test</strong>.</h1>
              <h4 class="mt-3 font-weight-light text-center"><b><span class="underline">Over 30%</span></b> of applicants fail the test. We make passing <span class="underline"><b>simple</b></span>.</h4>
              
			  <!-- Subscription form-->
<form class="form-inline justify-content-center" style="margin-top: 30px;">
 
    <select class="mdb-select md-form">
  <option disabled selected>Your Province/Territory</option>
  <option value="Alberta">Alberta</option>
  <option value="Ontario">Ontario</option>
  <option value="NWT">Northwest Territories</option>
</select> 
   <div class="form-group mx-sm-3 mb-2">
  <a class="btn-lg btn-width btn-danger btn-rounded shadow mb-2 text-white topscroll" style="background-color: #ff5555!important;"><b>Get Started for Free</b></a></div>
</form>
              <!-- Platforms-->
             
            </div>
           
          </div>
        </div>
      </section>
	<hr>

  <section class="grey lighten-1" style="padding-top: 50px;margin-top: -20px;padding-bottom: 75px;">
<div class="container">

    
    <h3 class="text-center mb-4 pb-2" style="color: #fff;">750+ Questions, the Official Study Material & More</h3>

    <h5 class="text-center mx-auto mb-5" style="color: #fff;">CitizenshipSimple is the most comprehensive study tool for the Canadian Citizenship Test</h5>


    <div class="row">


      <div class="col-md-4">


        <div class="row mb-3">

  
          <div class="col-2">
            <i class="fas fa-2x fa-clock" style="color: #fff;"></i>
          </div>

          <div class="col-10">
            <h5 class="font-weight-bold mb-3" style="color: #fff;">Timed tests, Exam Format</h5>
            <p class="" style="color: #fff;">Scored and graded timed exams in the format of the official exam.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-3">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-shipping-fast" style="color: #fff;"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" style="color: #fff;">Zip Tests</h5>
            <p class="" style="color: #fff;">Quicker version of the exam graded as you go. Learn while you answer questions.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-md-0 mb-3">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-tasks" style="color: #fff;"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" style="color: #fff;">Difficulty Settings</h5>
            <p class="" style="color: #fff;">Unlock harder exam questions as you improve. Designed for your learning level.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 text-center">
        <img class="img-fluid" src="/img/i.png"
          alt="Sample image">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4">

        <!-- Grid row -->
        <div class="row mb-3">

          <!-- Grid column -->
          <div class="col-2">
            <i class="far fa-2x fa-heart" style="color: #fff;"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" style="color: #fff;">Earn Points and Badges</h5>
            <p class="" style="color: #fff;">CitizenshipSimple sprinkles in gamification to make test preparation fun.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-3">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-bolt" style="color: #fff;"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" style="color: #fff;">Progress Tracking</h5>
            <p class="" style="color: #fff;">Your exam scores are graphed. Track your progress over time.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-magic" style="color: #fff;"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" style="color: #fff;">The Official Material Modulized and tracked.</h5>
            <p class="" style="color: #fff;">Your practice results dictate what material you should study. CitizenshipSimple tracks you and prepares the material.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  </div>
  <!--Section: Content-->
  <div class="container">
	   <section class="features padding-big" >         
        <div class="container">
          <div class="section-header text-left">
            <h2 class="dark-grey-text font-weight-bold text-center">Studying is <span class="underline">essential</span>.</h3>
			
          </div>
          <div class="row mt-5 text-left">
            <div class="col-lg-3">
              <div class="features-item mb-5 mb-lg-0">
                <h5 class="dark-grey-text font-weight-bold">The Failure Rate is High</h5>
                <p>Over one-third of applicants fail the exam. Since 2010, the exam has been designed to weed out all but the most prepared, most earnest new Canadians. </p>
              </div>
            </div>
			 <div class="col-lg-3">
              <div class="features-item mb-5 mb-lg-0">
                <h5 class="dark-grey-text font-weight-bold">Failure costs money.</h5>
                <p>If required to reapply, <i>all</i> applicable filing and service fees must be repaid, costing hundreds of dollars.</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="features-item mb-5 mb-lg-0">
                <h5 class="font-weight-bold dark-grey-text">Failure costs time.</h5>
                <p>Failing could result in you having to reapply for citizenship. That could mean years before earning the benefits of legal citizenship.</p>
              </div>
            </div>
			 <div class="col-lg-3">
              <div class="features-item mb-5 mb-lg-0">
                <h5 class="h5 font-weight-bold dark-grey-text">Lost Benefits of Citizenship</h5>
                <p>Worst of all, the benefits and pride of being a legal Canadian citizen are lost.</p>
              </div>
            </div>
			</div>
        </div>
      </section>

  <!--Section: Content-->
  <section id="pricer" class="text-center dark-grey-text">

    <!-- Grid row -->
    <div class="row">
   <div class="col-lg-1"></div>

      <!-- Grid column -->
      <div class="col-lg-7 col-md-12 mb-4">
            <h2 class="dark-grey-text font-weight-bold text-center">Try a <span class="underline">Sample</span>.</h2>
<h4 style="margin-bottom: 30px;">Not sure about <b>Free Registration</b>? That's OK, try a couple free samples just to see what's available.
</h4>
  <a href="citizenship-test" class="btn-lg btn-danger btn-rounded shadow mb-2 text-white" style="background-color: #ff5555!important; width: 80%!important;"><b>Try Samples before Signup</b></a>

      </div>
      <!-- Grid column -->

      <!--  Grid column  -->
      <div class="col-lg-4 col-md-6 mb-4">

        <!-- Card -->
        <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(8).jpg');">

          <!-- Pricing card -->
          <div class="text-white text-center pricing-card d-flex align-items-center rgba-red-strong py-3 px-3 rounded">

            <!-- Content -->
            <div class="card-body">
            <h5 class="font-weight-bold mt-3">Register</h5>

              <!--Price -->
                <div class="price pt-0">
              <h1 class=" mb-0">Free</h1>
            </div>

              <ul class="striped mb-0">
                <li>
                  <p>Up to <strong>750+</strong> Questions</p>
                </li>
                <li>
                  <p><strong>Different</strong> Test Difficulties</p>
                </li>
                <li>
                  <p><strong>Loads of </strong> features</p>
                </li>
                <li>
                  <p>Chapter Tests</p>
                </li>
				 <li>
                  <p>Official Study Material</p>
                </li>
				 <li>
                  <p>Progress Tracking</p>
                </li>
              </ul>
              <a href="register" class="btn btn-rounded btn-outline-white">Start Now</a>

            </div>
            <!-- Content -->

          </div>
          <!-- Pricing card -->

        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


    </div>
     @include('footer')

    <!-- JavaScript files-->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
  </body>
  <script>
 $(document).ready(function() {
$('.mdb-select').materialSelect();
});
  </script>
  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".topscroll").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $('#pricer').offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
      });
    // End if
  });
});
</script>
</html>