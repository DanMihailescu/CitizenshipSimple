


@include('header')
<style>

.wrap__section {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 200px;
    height: 200px;
    border-radius: 50%;
    overflow: hidden;

  

    &:before {
        content: "";
        position: absolute;
        top: 0;
        left: -60px;
        width: 100px;
        height: 100%;
        background: rgba(255, 255, 255, 0.3);
        transform: skewX(-30deg);
        transition: 0.8s;
    }

    &:hover:before {
        left: 240px;
    }
}

</style>

<style>
@import url(https://fonts.googleapis.com/css?family=Lobster);
</style>

<div class="container">
<div class="row align-items-center text-center" style="padding-top: 10px;">
 <div class="col-2"><img src="/img/discoverflag1.svg" style="margin: auto;padding-bottom: 10px;width: 100%" />
</div>
<div class="col-10 text-left align-items-center">
              <h1 class="font-weight-normal dark-grey-text">Discover <span class="canada-text"><strong>Canada</strong></span></h1>
<p class="h3 grey-text" style="">The Official Material for the Canadian Citizenship Test.</p>
 </div>
 </div></div>

 <div class="container">
 <hr style="border-bottom: 5px solid #eaeaea;">
 <section class="text-center text-lg-left">
<div class="row">
      <div class="col-lg-4 mb-4" style="">
        <div class="p-4 ">
         <div class="wrap_section"> <div class="view" style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49); -ms-transform: rotate(0deg); /* IE 9 */
  -webkit-transform: rotate(0deg); /* Safari prior 9.0 */
  transform: rotate(0deg);">
            <img
              src="/img/oath.jpg"
              class="img-fluid z-depth-2"
           style="border: 1px solid #333;" />  
</div>

		  
		  <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >

          </div></div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Oath of Citizenship <?php if(!empty($oath->module) && $oath->module == 1){?><i class="fas fa-check-square text-success"></i> <?php } ?></h6>
             <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $oathper }}" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100"></div>
          </div>
		  		  		  <p class="small-text"><b><?php if(!empty($oath->module)){?>{{ $oath->module }}<?php }else{?>0<?php }?></b> of <b>1</b> modules complete
   
@guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	  <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/oath/oath-of-citizenship" class="btn btn-rounded btn-md btn-canada" style="background: #ff5555;"><?php if(empty($oath->module)){?>Start Section<?php } else {?>Repeat Section<?php } ?></a>
					</div>	
		<?php } else { ?>
   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/oath/oath-of-citizenship" class="btn btn-rounded btn-md btn-canada" style="background: #ff5555;"><?php if(empty($oath->module)){?>Start Section<?php } else {?>Repeat Section<?php } ?></a>
					</div>	
			<?php }?>			
	@endguest	
          </div>
		  
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="p-4 animated">
          <div
            class="view " style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49); -ms-transform: rotate(0deg); /* IE 9 */
  -webkit-transform: rotate(0deg); /* Safari prior 9.0 */
  transform: rotate(0deg);"
          >
            <img
              src="/img/Charter2.jpg"
              class="img-fluid z-depth-1" style="border: 1px solid #333;"
            />
          </div>
          <div class="text-center mt-3">
           <h6 class="font-weight-bold pt-2">Rights and Responsibilities <?php if(!empty($rights->module) && $rights->module == 4){?><i class="fas fa-check-square"></i> <?php } ?></h6>
             <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $rightsper }}%" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100"></div>
          
          </div>
		  		  <p class="small-text"><b><?php if(!empty($rights->module)){?>{{$rights->module}}<?php }else{?>0<?php }?></b> of <b>4</b> modules complete

          </div>
	@guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="upgrade" class="btn btn-md btn-rounded btn-success">Upgrade for Free</a>
					</div>
		<?php } else { ?>
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/rights/<?php if(!empty($rights->nextsec)){?>{{ $rights->nextsec }}<?php } else {?>rights-intro<?php }?>" class="btn btn-md btn-rounded btn-canada"><?php if(empty($rights->module)){?>Start Section<?php } elseif($rights->module < 4){?>Continue Section<?php } else {?>Repeat Section<?php }?></a>
					</div>

		<?php }?>			
	@endguest		
					
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="p-4">
          <div
            class="view" style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);"
          >
            <img
              src="/img/immigrant.jpg"
              class="img-fluid z-depth-1" style="border: 1px solid #333;"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Who We Are <?php if(!empty($who->module) && $who->module == 6){?><i class="fas fa-check-square"></i> <?php }?></h6>
           <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $whoper }}%" aria-valuemin="0"
                aria-valuemax="100"></div>
          
          </div>
		  <p class="small-text"><b><?php if(!empty($who->module)){?>{{$who->module}} <?php } else {?>0<?php }?></b> of <b>4</b> modules complete
         @guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/who/<?php if(!empty($who->nextsec)){?>{{ $who->nextsec }}<?php } else {?>who-we-are<?php }?>" class="btn btn-md btn-rounded btn-canada"><?php if(empty($who->module)){?>Start Section<?php } elseif($who->module < 6){?>Continue Section<?php } else {?>Repeat Section<?php }?></a>
				</div>
		<?php } else { ?>

		 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/who/<?php if(!empty($who->nextsec)){?>{{ $who->nextsec }}<?php } else {?>who-we-are<?php }?>" class="btn btn-md btn-rounded btn-canada"><?php if(empty($who->module)){?>Start Section<?php } elseif($who->module < 6){?>Continue Section<?php } else {?>Repeat Section<?php }?></a>
				</div>
			<?php }?>			
	@endguest	
		  </div>
		  
        </div>
      </div>
    </div>
	  <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="p-4">
          <div
            class="view" style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);"
          >
            <img
              src="/img/cabot.jpg"
              class="img-fluid z-depth-1" style="border: 1px solid #333;"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Canadian History<?php if(!empty($history->module) && $history->module == 12){?><i class="fas fa-check-square text-success"></i> <?php } ?></h6>
             <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $historyper }}" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100"></div>
          
          </div>
		  		  		  <p class="small-text"><b><?php if(!empty($history->module)){?>{{ $history->module }}<?php }else{?>0<?php }?></b> of <b>12</b> modules complete
   
@guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="upgrade" class="btn btn-md btn-rounded btn-success">Upgrade for Free</a>
					</div>
		<?php } else { ?>
   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/canadas-history/<?php if(!empty($history->nextsec)){?>{{ $history->nextsec }}<?php } else {?>aboriginal-peoples<?php }?>" class="btn btn-md btn-rounded btn-canada"><?php if(empty($history->module)){?>Start Section<?php } elseif($history->module < 12){?>Continue Section<?php } else {?>Repeat Section<?php }?></a>
					</div>	
	
			<?php }?>			
	@endguest	
          </div>
		
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="p-4 animated pulse d-2s">
           <div
            class="view" style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);"
          >
            <img
              src="/img/skyline.jpg"
              class="img-fluid z-depth-1" style="border: 1px solid #333;"
            />
          </div>
          <div class="text-center mt-3">
           <h6 class="font-weight-bold pt-2">Modern Canada <?php if(!empty($modern->module) && $modern->module == 4){?><i class="fas fa-check-square"></i> <?php } ?></h6>
             <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $modernper }}%" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100"></div>
          
          </div>
		  		  <p class="small-text"><b><?php if(!empty($modern->module)){?>{{$modern->module}}<?php }else{?>0<?php }?></b> of <b>3</b> modules complete

          </div>
		  
@guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="upgrade" class="btn btn-md btn-rounded btn-success">Upgrade for Free</a>
					</div>
		<?php } else { ?>
		  <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/modern/<?php if(!empty($modern->nextsec)){?>{{ $modern->nextsec }}<?php } else {?>trade<?php }?>" class="btn btn-md btn-rounded btn-canada"><?php if(empty($modern->module)){?>Start Section<?php } elseif($modern->module < 4){?>Continue Section<?php } else {?>Repeat Section<?php }?></a>
					</div>	
						<?php }?>			
	@endguest	
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="p-4 animated pulse d-1s">
           <div
            class="view" style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);"
          >
            <img
              src="/img/parliament.jpg"
              class="img-fluid z-depth-1" style="border: 1px solid #333;"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">How Canadians Govern Themselves <?php if(!empty($govern->module) && $govern->module == 6){?><i class="fas fa-check-square"></i> <?php }?></h6>
           <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $governper }}%" aria-valuemin="0"
                aria-valuemax="100"></div>
          
          </div>
		  <p class="small-text"><b><?php if(!empty($govern->module)){?>{{$govern->module}} <?php } else {?>0<?php }?></b> of <b>3</b> modules complete
         
@guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="upgrade" class="btn btn-md btn-rounded btn-success">Upgrade for Free</a>
					</div>
		<?php } else { ?>
		 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="<?php if(!empty($govern->nextsec)){?>{{ $govern->nextsec }}<?php } else {?>govern<?php }?>" class="btn btn-md btn-rounded btn-canada"><?php if(empty($govern->module)){?>Start Section<?php } elseif($govern->module < 4){?>Continue Section<?php } else {?>Repeat Section<?php }?></a>
					</div>	
						<?php }?>			
	@endguest	
		  </div>
		  
        </div>
      </div>
    </div>
	  <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="p-4 d-1s">
          <div
            class="view" style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);"
          >
            <img
              src="/img/election.jpg"
              class="img-fluid z-depth-1" style="border: 1px solid #333;"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Federal Elections <?php if(!empty($elections->module) && $elections->module == 1){?><i class="fas fa-check-square text-success"></i> <?php } ?></h6>
             <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $electionsper }}" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100"></div>
          
          </div>
		  		  		  <p class="small-text"><b><?php if(!empty($elections->module)){?>{{ $elections->module }}<?php }else{?>0<?php }?></b> of <b>3</b> modules complete
    
	@guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="upgrade" class="btn btn-md btn-rounded btn-success">Upgrade to Begin</a>
					</div>
		<?php } else { ?>
	<div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/elections/<?php if(!empty($elections->nextsec)){?>{{ $elections->nextsec }}<?php } else {?>federal-elections<?php }?>" class="btn btn-md btn-rounded btn-canada"><?php if(empty($elections->module)){?>Start Section<?php } elseif($elections->module < 3){?>Continue Section<?php } else {?>Repeat Section<?php }?></a>
					</div>	
						<?php }?>			
	@endguest	
          </div>
		
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="p-4 animated pulse">
          <div
            class="view" style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);"
          >
            <img
              src="/img/supreme.jpg"
              class="img-fluid z-depth-1" style="border: 1px solid #333;"
            />
          </div>
          <div class="text-center mt-3">
           <h6 class="font-weight-bold pt-2">The Justice System <?php if(!empty($justice->module) && $justice->module == 4){?><i class="fas fa-check-square"></i> <?php } ?></h6>
             <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $justiceper }}%" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100"></div>
          
          </div>
		  		  <p class="small-text"><b><?php if(!empty($justice->module)){?>{{$justice->module}}<?php }else{?>0<?php }?></b> of <b>1</b> modules complete

          </div>
		 
@guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="upgrade" class="btn btn-md btn-rounded btn-success">Upgrade for Free</a>
					</div>
		<?php } else { ?>
		 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/justice/<?php if(!empty($justice->nextsec)){?>{{ $justice->nextsec }}<?php } else {?>justice-system<?php }?>" class="btn btn-md btn-rounded btn-canada"><?php if(empty($justice->module)){?>Start Section<?php } elseif($justice->module < 4){?>Continue Section<?php } else {?>Repeat Section<?php }?></a>
					</div>	
						<?php }?>			
	@endguest	
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="p-4 animated pulse d-2s">
          <div
            class="view" style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);"
          >
            <img
              src="/img/silver.jpg"
              class="img-fluid z-depth-1" style="border: 1px solid #333;"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Canadian Symbols <?php if(!empty($who->module) && $who->module == 6){?><i class="fas fa-check-square"></i> <?php }?></h6>
           <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $whoper }}%" aria-valuemin="0"
                aria-valuemax="100"></div>
          
          </div>
		  <p class="small-text"><b><?php if(!empty($symbols->module)){?>{{$symbols->module}} <?php } else {?>0<?php }?></b> of <b>4</b> modules complete
         @guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="upgrade" class="btn btn-md btn-rounded btn-success">Upgrade for Free</a>
					</div>
		<?php } else { ?>
		 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/symbols/<?php if(!empty($symbols->nextsec)){?>{{ $symbols->nextsec }}<?php } else {?>symbols-one<?php }?>" class="btn btn-md btn-rounded btn-canada"><?php if(empty($symbols->module)){?>Start Section<?php } elseif($symbols->module < 4){?>Continue Section<?php } else {?>Repeat Section<?php }?></a>
					</div>	
						<?php }?>			
	@endguest	
		  </div>
		  
        </div>
      </div>
    </div>
	
	  <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="p-4">
         <div
            class="view" style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);"
          >
            <img
              src="/img/economy.jpg"
              class="img-fluid z-depth-1" style="border: 1px solid #333;"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Canadian Economy <?php if(!empty($economy->module) && $economy->module == 1){?><i class="fas fa-check-square text-success"></i> <?php } ?></h6>
             <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $economyper }}" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100"></div>
          
          </div>
		  		  		  <p class="small-text"><b><?php if(!empty($economy->module)){?>{{ $economy->module }}<?php }else{?>0<?php }?></b> of <b>3</b> modules complete
   @guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="upgrade" class="btn btn-md btn-rounded btn-success">Upgrade for Free</a>
					</div>
		<?php } else { ?>
   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/economy/economy-one" class="btn btn-md btn-rounded btn-canada"><?php if(empty($economy->module)){?>Start Section<?php } else {?>Repeat Section<?php } ?></a>
					</div>	
						<?php }?>			
	@endguest	
          </div>
		
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="p-4 animated pulse d-2s">
         <div
            class="view" style="-webkit-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
-moz-box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);
box-shadow: 8px 10px 0px 0px rgba(120,100,101,0.49);"
          >
            <img
              src="/img/map.jpg"
              class="img-fluid z-depth-1" style="border: 1px solid #333;"
            />
          </div>
          <div class="text-center mt-3">
           <h6 class="font-weight-bold pt-2">Regions of Canada <?php if(!empty($rights->module) && $rights->module == 4){?><i class="fas fa-check-square"></i> <?php } ?></h6>
             <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: {{ $rightsper }}%" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100"></div>
          
          </div>
		  		  <p class="small-text"><b><?php if(!empty($rights->module)){?>{{$rights->module}}<?php }else{?>0<?php }?></b> of <b>6</b> modules complete

          </div>
		 @guest
		   <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="register" class="btn btn-md btn-rounded btn-success">Register to Begin</a>
					</div>
	@else
		<?php if(Auth::user()->user_type == 'free') {?>
	 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="upgrade" class="btn btn-md btn-rounded btn-success">Upgrade for Free</a>
					</div>
		<?php } else { ?>
		 <div class="text-center" style="text-align: center;width: 100%; display: block;">
						  <a href="/regions/<?php if(!empty($regions->nextsec)){?>{{ $regions->nextsec }}<?php } else {?>regions<?php }?>" class="btn btn-md btn-rounded btn-canada"><?php if(empty($regions->module)){?>Start Section<?php } elseif($regions->module < 6){?>Continue Section<?php } else {?>Repeat Section<?php }?></a>
					</div>	
						<?php }?>			
	@endguest	
        </div>
      </div>
    
       
    </div>
 
  </section>
	
  </section>
  </section>




</div>
  <!--/.Copyright-->
<!--/.Footer-->
  <!-- JavaScript Libraries -->
       @include('footer')

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
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

  <!-- Template Main Javascript File -->
<script>
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["8 AM", "10 AM", "12 PM", "2 PM", "4 PM", "6 PM", "8 PM"],
    datasets: [
      {
        fill: false,
        borderColor: "#673ab7",
        pointBackgroundColor: "#673ab7",
        data: [885, 884, 887, 883, 888, 889, 888]
      }
    ]
  },
  options: {
    responsive: false,
    legend: {
      display: false
    },
    elements: {
      line: {
        tension: 0.0
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
        },
        ticks: {
          padding: 15,
          height: 30
        }
      }],
      yAxes: [{
        gridLines: {
          drawBorder: false
        },
        ticks: {
            maxTicksLimit: 5,
            min: 880,
            max: 890
          }
      }]
    }
  }
});
lizations -->
  <script>

    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();
    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });
    // Tooltips Initialization
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

  </script>

  <!-- Charts -->
  <script>
//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "Latest Result"],
datasets: [{
label: "My First dataset",
data: [65, 59, 80, 81, 56, 55, 40,80,93,73],
backgroundColor: [
'rgba(105, 0, 132, .2)',
],
borderColor: [
'rgba(200, 99, 132, .7)',
],
borderWidth: 2
}
]
},
options: {
responsive: true
}
});

    // Small chart
   
  </script>
</script>

</body>
</html>

