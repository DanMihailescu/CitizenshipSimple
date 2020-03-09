<footer class="page-footer font-small bottom-color pt-4">
  <!-- Footer Elements -->
  <div class="container">
    <!-- Call to action -->
     @guest
	<ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1 text-dark">Register for Free</h5>
      </li>
      <li class="list-inline-item">
        <a href="/register" class="btn btn-outline-danger btn-rounded">Sign up!</a>
      </li>
    </ul>
	@else
		<?php if(Auth::user()->usertype == 'free') {?>
	<ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1 text-dark">Upgrade for Free Week</h5>
      </li>
      <li class="list-inline-item">
        <a href="/upgrade" class="btn btn-success btn-rounded">Upgrade!</a>
      </li>
    </ul>
		<?php } else { ?>
		
		<?php }?>
		
	@endguest
    <!-- Call to action -->
   <div class="row text-dark">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">About CitizenshipSimple</h5>
        <p>The easiest and best way to prepare for the Citizenship Test. Built with love by Canadian computer scientist and recent immigrant Dan M. and life-long Canadian and former Microsoft employee Darryl O. </p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->

        <ul class="list-unstyled">
          <li class="p-1">
            <a href="/citizenship-test" class="red-text lighten-1 h6">Free Test Samples</a>
          </li>
          <li class="p-1">
            <a href="/discover-canada" class="red-text lighten-1 h6">Official Study Material</a>
          </li>
          <li class="p-1">
            <a href="/citizenship-info" class="red-text lighten-1 h6">Citizenship Resources</a>
          </li>

        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->

        <ul class="list-unstyled">
		  <li class="p-1">
            <a href="/help" class="red-text lighten-1 h6">Need Help? Contact Us</a>
          </li>
                <li class="p-1">
            <a href="/terms" class="red-text lighten-1 h6">Terms of Service</a>
          </li>
          <li class="p-1">
            <a href="/privacy" class="red-text lighten-1 h6">Privacy Policy</a>
          </li>
        
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="/"> CitizenshipSimple.ca</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

		