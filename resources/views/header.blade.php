<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Discover Canada: Canada's History</title>
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

		<script src="js/modernizr.custom.79639.js"></script>
		    <link rel="dns-prefetch" href="//fonts.gstatic.com">




  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>	 
<body data-spy="scroll" data-target="#toc">


	 
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
				          <li class="nav-item"><a href="../citizenship-test" class="nav-link h6" style="margin-top: 8px;color: #ff5555;"><u><b>Free</b></u> Practice Material</a></li>
  				          <li class="nav-item"><a href="../discover-canada" class="nav-link h6" style="margin-top: 8px;color: #ff5555;">Official Study Guide</a></li>

                  <li class="nav-item"><a href="../citizenship-info" class="nav-link h6" style="margin-top: 8px;color: #ff5555;">Citizenship Info</a></li>
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
  