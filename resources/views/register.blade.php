<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Register for CitizenshipSimple</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- Bootstrap CSS File -->


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/mdb.min.css">
<link rel="stylesheet" href="../css/app4.css">
  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="../css/mdb.min.css">

		<script src="../js/modernizr.custom.79639.js"></script>
		    <link rel="dns-prefetch" href="//fonts.gstatic.com">




  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>	 
<body>


	 
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Navbar brand--><a href="/" class="navbar-brand font-weight-bold"><img src="/img/logo6.png" alt="..." style="max-width: 200px;width: 100%;" ></a>
          <!-- Navbar toggler button-->
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">            <span class="navbar-toggler-icon dark-grey-text" style="margin-top: -20px;"></span>
</button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto ml-auto">
                  <!-- Link-->
				          <li class="nav-item"><a href="citizenship-test" class="nav-link h6" style="margin-top: 8px;color: #ff5555;"><u><b>Free</b></u> Practice Material</a></li>
  				          <li class="nav-item"><a href="discover-canada" class="nav-link h6" style="margin-top: 8px;color: #ff5555;">Official Study Guide</a></li>

                  <li class="nav-item"><a href="citizenship-info" class="nav-link h6" style="margin-top: 8px;color: #ff5555;">Citizenship Info</a></li>
                  <!-- Link-->
                  <!-- Link-->
           

            </ul>
            <ul class="navbar-nav">
	 @guest
                       
                               
                            @if (Route::has('register'))

			 <li class="nav-item"><a href="#" data-toggle="modal" data-target="#modalLRForm" class="nav-link font-weight-bold mr-3" style="margin-top: 8px;color: #ff5555;">Login <i class="fas fa-sign-in-alt"></i></a></li>
              <li class="nav-item"><a href="register" class="navbar-btn btn btn-primary" style="background-color: #ff5555!important;">Get Started</a></li>
           
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle primary-text" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest             

		   </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Login Modal--> 
	 <!-- Login Modal-->
    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 red" role="tablist" style="background-color: #fff!important;border: 1px solid #ff5555;">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab" style="background-color: #ff5555;"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="/register" role="tab" style="color: #ff5555;"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
			  <form method="POST" action="{{ route('login') }}">
                        @csrf

              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" name="email" id="modalLRInput10" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" name="password" id="modalLRInput11" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-danger btn-rounded btn-lg" style="background-color: #ff5555!important;width: 100%;">Log in</button>
				  <p> @if (Route::has('password.request'))
                                    <a class="btn btn-link"  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif</p>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-lg-right mt-1">
                <p class="h6">Not a member? <a href="register" class="red-text">Sign Up</a></p>
              
              </div>
              <button type="button" class="btn btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
    </form>
          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="btn btn-danger btn-rounded" style="background-color: #ff5555;">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->
  

  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">


<div class="container">
  <!--Section: Content-->
  <section class="text-center dark-grey-text">

    <!-- Section heading -->
   <h1 style="color: #ff5555; font-family: 'Lobster';">Time To Register...Free</h1>
<p class="h3 grey-text" style="font-family: 'Lobster';">It's free and you get access to <i>incredible</i> study tools.</p>
<div class="container">
    <!-- Section heading -->
    <!-- Section description -->
   <div class="row my-3 py-3 dark-grey-text">
   <div class="col-lg-6 text-left grey-text">
        <!-- Grid row -->
        <div class="row mb-3">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-clock" ></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" >Timed tests, Exam Format</h5>
            <p class="" >Scored and graded timed exams in the format of the official exam.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-3">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-shipping-fast"  #fff;"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" >Zip Tests</h5>
            <p class="">Quicker version of the exam graded as you go. Learn while you answer questions.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-md-0 mb-3">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-tasks" ></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" >Difficulty Settings</h5>
            <p class="">Unlock harder exam questions as you improve. Designed for your learning level.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      <!-- Grid column -->

      <!-- Grid column -->
    
      <!-- Grid column -->

      <!-- Grid column -->

        <!-- Grid row -->
        <div class="row mb-3">

          <!-- Grid column -->
          <div class="col-2">
            <i class="far fa-2x fa-heart" ></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" >Earn Points and Badges</h5>
            <p class="" >CitizenshipSimple sprinkles in gamification to make test preparation fun.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-3">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-bolt" ></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" >Progress Tracking</h5>
            <p class="" >Your exam scores are graphed. Track your progress over time.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-magic" ></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3">The Official Material Modulized and tracked.</h5>
            <p class="" >Your practice results dictate what material you should study. CitizenshipSimple tracks you and prepares the material.</p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->


    </div>
	<div class="col-lg-6">
	  <ul class="stepper stepper-horizontal">

      <!-- First Step -->
      <li class="active">
        <a href="#!">
          <span class="circle">1</span><br>
          <span class="label">Create Account</span>
        </a>
      </li>

      <!-- Second Step -->
      <li class="">
        <a href="#!">
          <span class="circle">2</span><br>
          <span class="label">Choose Path</span>
        </a>
      </li>

      <!-- Third Step -->
      <li class="">
        <a href="#!">
          <span class="circle">3</span><br>
          <span class="label">Begin Training</span>
        </a>
      </li>

    </ul>
    <!-- /.Stepers Wrapper -->
 <form method="POST" action="{{ route('register') }}">
                        @csrf

        <!-- Material outline input -->
        <div class="">
          <input type="text" id="form1" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
  
			 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        
        <!-- Material outline input -->
        <div class="md-form md-outline form-lg">
          <input type="text" id="form2" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >
          <label for="form2">Email</label>
		     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        
        <!-- Material outline input -->
        <div class="md-form md-outline form-lg">
          <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          <label for="form3">Password</label>
		  
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
          <div class="md-form md-outline form-lg">
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
          <label for="form3">Confirm Password</label>
		  
                             
        </div>
        <div class="align-items-middle">
        <button type="submit" class="btn btn-block btn-rounded btn-canada btn-lg align-center">Sign up</button>
		</div>
		</form>
	
	
	</div>
	</div>
    <!-- Grid row -->
    <!-- Grid row -->
	</div>
  

    <!-- Grid row -->

  </section>
  <!--Section: Content-->

 
 </div>
 
  <!-- Footer Elements -->

  <!-- Copyright -->
 
  <!-- Copyright -->
</div>
@include('footer')
 <script src="/lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.rawgit.com/afeld/bootstrap-toc/v0.3.0/dist/bootstrap-toc.min.js"></script>
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
  <script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script>
(function ($){
  $.fn.counter = function() {
    const $this = $(this),
    numberFrom = parseInt($this.attr('data-from')),
    numberTo = parseInt($this.attr('data-to')),
    delta = numberTo - numberFrom,
    deltaPositive = delta > 0 ? 1 : 0,
    time = parseInt($this.attr('data-time')),
    changeTime = 10;
    
    let currentNumber = numberFrom,
    value = delta*changeTime/time;
    var interval1;
    const changeNumber = () => {
      currentNumber += value;
      //checks if currentNumber reached numberTo
      (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
      this.text(parseInt(currentNumber));
      currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
    }

    interval1 = setInterval(changeNumber,changeTime);
  }
}(jQuery));

$(document).ready(function(){

  $('.count-up').counter();
  $('.count1').counter();
  $('.count2').counter();
  $('.count3').counter();
  
  new WOW().init();
  
  setTimeout(function () {
    $('.count5').counter();
  }, 3000);
});

</script>

