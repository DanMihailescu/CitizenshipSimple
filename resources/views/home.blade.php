@extends('layouts.app')

@section('content')
<style>
@import url(https://fonts.googleapis.com/css?family=Lobster);
h1 {font-family: 'Lobster';}
.lobster {font-family: 'Lobster';}
.l {font-size: 4.0em; color: #ff5555;}
</style>
<div class="container animated fadeIn">
<div class="row">
<div class="col-12">
 <section>
    
    <style>
	.pills-outline-red .nav-item .nav-link.active {
    border: 1px solid #ff5555;
    color: #f44336;
}
.pills-outline-red .nav-item .nav-link {
    border: 2px solid #fff;
    color: #666;
    background-color: transparent;
}
.pills-rounded .nav-item .nav-link {
    border-radius: 10em;
}
	.indigo {
		
		background: #f4e3d7!important;border: 5px solid #deaa87;shadow: none;color: #a05a2c!important;font-weight: bolder!important;
	}
      .fa-play:before {
        margin-left: .3rem;
      }
.step-excerpt{margin-top: 15px;}
      /* Steps */
      .step {
        list-style: none;
        margin: 0;
      }

      .step-element {
        display: flex;
        padding: 1rem 0;
      }

      .step-number {
        position: relative;
        width: 100%;
		margin: auto;
        flex-shrink: 0;
        text-align: center;
      }
      .step-number .number {
        width: 78px;
		margin: auto;
        height: 78px;
        line-height: 78px;
      }
      .number {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 38px;
        border-radius: 10rem;
      }
      .step-number::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 48px;
        bottom: -2rem;
        margin-left: -1px;
      }
      .step .step-element:last-child .step-number::before {
        bottom: 1rem;
      }
	  .step-number .b-red{
		  background-color: #ff5555!important;
		  border: 8px solid #ff4444!important;
		  color: #fff!important;
	  }
	   .step-number .number {
        color: #bfc5ca;
        background-color: #eaeff4;
		border: 8px solid #ccc;
        font-size: 1.5rem;
      }
    </style>
	<?php if(Auth::user()->user_type == 'free'){ ?>
<div class="row">
<div class="col-12">

  <!--Section: Content-->
  <section class="text-center white-text d-md-flex justify-content-between p-2 red lighten-2 rounded my-3">

    <h6 class="font-weight-bold  p-3 text-red">Limited Functionality: The Trial Version only includes 80 Citizenship Test Questions. Upgrade to unlock 700 more.</h6>
    
    <a href="/upgrade" class="btn btn-white btn-rounded">Upgrade Free</a>

  </section>
  <!--Section: Content-->

</div>
</div>
<?php } ?>
<div class="row text-center">
<div class="col-12">

   <!-- Grid column -->
  
  <!-- Grid column -->
 	<?php if ($points[0]->mediumshort >= 3 OR $points[0]->mediumlong >= 2){?>

<?php } elseif ($points[0]->easyshort >= 3 OR $points[0]->easylong >= 2){?>

<?php } else {?>
<h1 class="dark-grey-text text-center" style="">Test Level: <span style="color: #ff5555;font-family: 'Lobster';">Easy</span></h1>
<?php }?>
</div>
</div>

<div class="row"><div class="col-md-1"></div>
<div class="col-md-10">
        <p class="dark-grey-text h3 text-center" style="font-family: 'Lobster';">Scoring History</p>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
      aria-selected="true">Easy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
      aria-selected="false">Medium</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
      aria-selected="false">Hard</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
      aria-controls="pills-home" aria-selected="true">Zip Test</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
      aria-controls="pills-profile" aria-selected="false">Full Simulation</a>
  </li>

</ul>
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
 <section>
        <canvas id="lineChart1" class="" height="100"></canvas>
  </section> 

 </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> <section>
        <canvas id="lineChart2" class="" height="100"></canvas>
  </section></div>
 
 </div></div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">    
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home2" role="tab"
      aria-controls="pills-home" aria-selected="true">Zip Test</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile2" role="tab"
      aria-controls="pills-profile" aria-selected="false">Full Simulation</a>
  </li>

</ul>
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
 <section>
        <canvas id="lineChart3" class="" height="100"></canvas>
  </section> 

 </div>
  <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab"> <section>
        <canvas id="lineChart4" class="" height="100"></canvas>
  </section></div>
 
 </div>
 </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home3" role="tab"
      aria-controls="pills-home" aria-selected="true">Zip Test</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile3" role="tab"
      aria-controls="pills-profile" aria-selected="false">Full Simulation</a>
  </li>

</ul>
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab">
 <section>
        <canvas id="lineChart5" class="" height="100"></canvas>
  </section> 

 </div>
  <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile-tab"> <section>
        <canvas id="lineChart6" class="" height="100"></canvas>
  </section></div>
 
 </div>
 </div></div>
</div>

  </div>
  <div class="col-md-1"></div>
  </div>
  
<div class="row"><div class="col-lg-1"></div>
<div class="col-lg-3 text-center">

<h1 class="l" style="margin-bottom: 0px;">{{ $points[0]->points }}</h1>
<label style="color: #ff5555;"><b>Points Earned</b></label>

<h5 class="lobster canada-text">
<?php if($points[0]->points < 30){?>
Bronze Beaver
<?php }?>
<?php if($points[0]->points > 29 && $points[0]->points < 150){?>
Silver Bear
<?php }?>
<?php if($points[0]->points > 149 && $points[0]->points < 350){?>
Golden Pancakes
<?php }?>
<?php if($points[0]->points > 349 && $points[0]->points < 650){?>
Maple Syrup
<?php }?>
<?php if($points[0]->points > 649 && $points[0]->points < 100){?>
Team Canada
<?php }?></h5>
</div>
<div class="col-lg-7">
 <div class="row">
	 <div class="col-lg-12">
	 <div class="row">
<div class="col align-center text-center"><img src="/img/bronze3.svg" style="max-width: 50px;" /></div>
<?php if($points[0]->points > 29){?>
<div class="col align-center text-center"><img src="/img/silver3.svg" style="max-width: 50px;" /></div>
<?php } else { ?>
<div class="col align-center text-center"><img src="/img/unearned.svg" style="max-width: 50px;" /></div>
<?php }?>
<?php if($points[0]->points > 149){?>
<div class="col align-center text-center"><img src="/img/gold2.svg" style="max-width: 50px;" /></div>
<?php } else { ?>
<div class="col align-center text-center"><img src="/img/unearned.svg"   style="max-width: 50px;" /></div>
<?php }?>
<?php if($points[0]->points > 349){?>
<div class="col align-center text-center"><img src="/img/platinum3.svg" style="max-width: 50px;" /></div>
<?php } else { ?>
<div class="col align-center text-center"><img src="/img/unearned.svg"   style="max-width: 50px;" /></div>
<?php }?>
<?php if($points[0]->points > 649){?>
<div class="col align-center text-center"><img src="/img/canada2.svg" style="max-width: 50px;" /></div>
<?php } else { ?>
<div class="col align-center text-center"><img src="/img/unearned.svg"   style="max-width: 50px;" /></div>
<?php }?></div>	
</div>

</div>

<p class="text-center h5 font-weight-normal grey-text" style="margin-top: 15px;">
<?php if($points[0]->points < 30){?>
You're at the starter's gun. Just like the <b>Eager Beaver</b> who's joined you. He looks lonely, earn some points to reveal his friend...
<?php }?>
<?php if($points[0]->points > 29 && $points[0]->points < 150){?>
Oh no, the Eager Beaver's buddy is the <b>Silver Bear</b>! You better earn some points and get him something to eat before he eats you...
<?php }?>
<?php if($points[0]->points > 149 && $points[0]->points < 350){?>
Golden pancakes! A Canadian treat. That should keep the Eager Beaver happy. But Silver Bear has a sweet tooth. You need a little extra...
<?php }?>
<?php if($points[0]->points > 349 && $points[0]->points < 650){?>
Sugary Maple Syrup! Silver bears love maple syrup and Silver Bear is lapping it up. You've bought yourself just enough time get top spot...
<?php }?>
<?php if($points[0]->points > 650 && $points[0]->points < 100){?>
Success! While the Silver Bear and Eager Beaver were eating their syrupy pancakes, you snatched the <b>Team Canada Jersey</b>!
<?php }?></p>
</div>
<div class="col-lg-1"></div>
</div>

<div class="row" style="margin-top: 25px">
<div class="col-lg-0"></div>
<div class="col-lg-12">
<div class="card z-depth-0" style="border: 2px solid #eaeaea;">
<div class="card-body">
<h2 class="dark-grey-text text-center" style="font-family: 'Lobster';">Citizenship Practice Tests</h2>

<p class="h5 font-weight-normal text-muted text-center" style="margin-bottom: 30px;">
<?php if($points[0]->easyshort < 3 && $points[0]->easylong < 2) {?>
Complete <?php $scoreeasys = 3 - $points[0]->easyshort; echo $scoreeasys;?> more Easy Zip Tests or <?php $scoreeasyl = 2 - $points[0]->easylong; echo $scoreeasyl;?> Easy Full Simulations with a score at or above 80% to unlock <b>Medium Difficulty</b> Tests.  
<?php }?>
<?php if($points[0]->mediumshort < 3 && $points[0]->mediumlong < 2) { if ($points[0]->easyshort > 2 OR $points[0]->easylong > 1){ ?>
<span class="text-danger"><b>Medium Difficulty Unlocked</b></span><br>Complete <?php $scoreeasys = 3 - $points[0]->mediumshort; echo $scoreeasys;?> more Medium Zip Tests or <?php $scoreeasyl = 2 - $points[0]->mediumlong; echo $scoreeasyl;?> Medium Full Simulations with a score at or above 80% to unlock <b>Hard Difficulty</b> Tests. <i>*Upgraded Account Required</i>. 

<?php }}?>
<div class="card-deck">
<div class="card z-depth-0" style="border: none;">
     <div class="card-body">
            <div class="step-number text-center">
<img src="/img/acorn2.svg" style="max-width: 20%; margin: auto;" />           
              <p class="h4 canada-text text-center">Easy</p>
<a href="easy-start" class="btn btn-md btn-canada btn-rounded text-center" style="margin: auto;">Start Practicing!</a>
	 </div>
         </div>
		 </div>
		 
		 <div class="card z-depth-0" style="border: none; box-shadow: none;">
		 <div class="card-body">
            <div class="step-number text-center">
				<?php if ($points[0]->easyshort >= 3 OR $points[0]->easylong >= 2){?>
<img src="/img/teepeered2.svg" style="max-width: 20%; margin: auto;" />   
				<?php } else {?>
<img src="/img/teepeegrey2.svg" style="max-width: 20%; margin: auto;" />           
        
				<?php }?>
				<?php if ($points[0]->easyshort >= 3 OR $points[0]->easylong >= 2){?>

				              <p class="h4 canada-text text-center">Medium</p>
				<?php } else {?>
								              <p class="h4 grey-text text-center">Medium</p>

								<?php }?>
         
				<?php if ($points[0]->easyshort >= 3 OR $points[0]->easylong >= 2){?>
				<?php if(Auth::user()->user_type == 'free'){ ?>
<a href="/upgrade" class="btn btn-info btn-rounded btn-md" style="width: 80%;">Upgrade to Continue</a>
				<?php } else { ?> 
			<a href="medium-start" class="btn btn-md btn-canada btn-rounded">Start Practicing!</a>
				<?php } ?>
				<?php } else {?>
			<a href="#" class="btn btn-md btn-light btn-rounded" style="width: 80%;">Not Yet!</a>
				<?php }?>
		  </div>
        </div>
		  </div>
		  <div class="card" style="border: none; box-shadow: none;">
		  <div class="card-body">
            <div class="step-number text-center align-center">
				<?php if ($points[0]->mediumshort >= 3 OR $points[0]->mediumlong >= 2){?>
<img src="/img/mountainred2.svg" style="max-width: 20%; margin: auto;" />   
				<?php } else {?>
<img src="/img/mountaingrey2.svg" style="max-width: 20%; margin: auto;" />           
				<?php }?>
			
				<?php if ($points[0]->mediumshort >= 3 OR $points[0]->mediumlong >= 2){?>
				              <p class="h4 canada-text text-center">Hard</p>
				<?php } else {?>
								              <p class="h4 grey-text text-center">Hard</p>
			<?php }?>    
<?php if ($points[0]->mediumshort >= 3 OR $points[0]->mediumlong >= 2){?>
			<a href="hard-start" class="btn btn-md btn-canada btn-rounded">Start Practicing!</a>
				<?php } else {?>
			<a href="#" class="btn btn-md btn-light btn-rounded" style="width: 80%;">Not Yet!</a>
				<?php }?>			
			</div>
</div>
</div>

      </div>

</div></div></div>
<div class="col-lg-0"></div>
   
</div>

	
</section>
</div>

  <!--Section: Block Content -->

<?php if(Auth::user()->user_type == 'free'){ ?>
<div class="row">
<div class="col-12">

  <!--Section: Content-->
  <section class="text-center white-text d-md-flex justify-content-between p-2 red lighten-2 rounded my-3">

    <h6 class="font-weight-bold  p-3 text-red">Limited Functionality: Your Trial Version won't include the Medium and Hard Levels after completing Easy Tests.</h6>
    
    <a href="/upgrade" class="btn btn-white btn-rounded">Upgrade Free</a>

  </section>
  <!--Section: Content-->

</div>
</div>
<?php } ?>

	
	 <hr style="border: 4px solid #eaeaea;">
	 
      
    <!--Section: Content-->
   

      <!--Grid row-->
      
<div class="card z-depth-0" style="border: 2px solid #eaeaea;">
<div class="card-body">
        <!--Grid column-->
		<div class="row">
		        <div class="col-lg-4">

          <img src="/img/discovercanadaguide2.jpg" style="width: 100%; max-width: 493px;margin:auto;" alt="">

        </div>
        <div class="col-lg-8 text-left">

   
  <h2 class="font-weight-bold dark-grey-text" style="font-family: 'Lobster';">Official Discover Canada Study Guide</h2>

          <p class="text-muted h5">The official Discover Canada Study Guide with embedded question modules testing your knoweldge as you learn.</p>
          <a href="/discover-canada" class="btn btn-canada btn-lg btn-rounded ml-0 text-white" href="#" role="button">Start now<i class="fas fa-chalkboard-teacher ml-2"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->

        <!--Grid column-->

      </div>
      <!--Grid row-->
</div>

    <!--Section: Content-->
</div>

<hr style="border-bottom: 4px solid #eaeaea;">
	 
	 
	 <div class="card z-depth-0" style="border: 2px solid #eaeaea;">
	 <div class="card-body">
<h2 class="dark-grey-text text-center" style="font-family: 'Lobster';">Chapter Tests</h2>
<p class="h5 grey-text text-center" style="margin-bottom: 30px;">Zip Tests tailored to all chapters from the Discover Canada Official Guide at medium to hard difficulty.</p>
<div class="row" style="margin-bottom: 50px;">
<div class="col-2"></div>


<div class="col-lg-8">
<div class="row">
<div class="col-4 text-center">
<img src="/img/mountie.svg" />
<p class="h6 grey-text">Perfect Score</p>
</div>
<div class="col-4 text-center">
<img src="/img/beer.svg" />
<p class="h6 grey-text">70% or above</p>
</div>
<div class="col-4 text-center">
<img src="/img/curling.svg" />
<p class="h6 grey-text">Below 70%</p>
</div>

</div>
</div>
</div>
<div class="row text-center">
<div class="col-lg-4">

<p class="h5 dark-grey-text"><strong>Oath and Citizenship Responsibilities</strong></h5>

</div>
<div class="col-lg-5">
<?php if(isset($scoreseven[0]->score)){?>
<?php if($scoreseven[0]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreseven[0]->score < 100 && $scoreseven[0]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreseven[1]->score)){?>
<?php if($scoreseven[1]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreseven[1]->score < 100 && $scoreseven[1]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreseven[2]->score)){?>
<?php if($scoreseven[2]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreseven[2]->score < 100 && $scoreseven[2]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreseven[3]->score)){?>
<?php if($scoreseven[3]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreseven[3]->score < 100 && $scoreseven[3]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreseven[4]->score)){?>
<?php if($scoreseven[4]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreseven[4]->score < 100 && $scoreseven[4]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>



</div>
<div class="col-lg-3">
<a href="/chapter-test?test=2&chapter=1&number=10&type=7" class="btn btn-md btn-rounded btn-canada">Begin Chapter</a>
</div>


</div>
<hr>
<div class="row text-center">
<div class="col-lg-4">

<p class="h5 dark-grey-text"><strong>Who We Are</strong></h5>

</div>
<div class="col-lg-5">
<?php if(isset($scoreeight[0]->score)){?>
<?php if($scoreeight[0]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreeight[0]->score < 100 && $scoreeight[0]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreeight[1]->score)){?>
<?php if($scoreeight[1]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreeight[1]->score < 100 && $scoreeight[1]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreeight[2]->score)){?>
<?php if($scoreeight[2]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreeight[2]->score < 100 && $scoreeight[2]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreeight[3]->score)){?>
<?php if($scoreeight[3]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreeight[3]->score < 100 && $scoreeight[3]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreeight[4]->score)){?>
<?php if($scoreeight[4]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreeight[4]->score < 100 && $scoreeight[4]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>



</div>
<div class="col-lg-3">
<a href="/chapter-test?test=2&chapter=3&number=10&type=8" class="btn btn-md btn-rounded btn-canada">Begin Chapter</a>
</div>


</div>
<hr>
<?php if(Auth::user()->user_type == 'free'){ ?>
<div class="row">
<div class="col-12">

  <!--Section: Content-->
  <section class="text-center white-text d-md-flex justify-content-between p-2 red lighten-2 rounded my-3">

    <h6 class="font-weight-bold  p-3 text-red">The Free Version doesn't include the remaining chapters. Upgrade to unlock.</h6>
    
    <a href="/upgrade" class="btn btn-white btn-rounded">Upgrade Free</a>

  </section>
  <!--Section: Content-->

</div>
</div>
<?php } ?>
<div class="row text-center">
<div class="col-lg-4">

<p class="h5 dark-grey-text"><strong>Canadian History</strong></h5>

</div>
<div class="col-lg-5">
<?php if(isset($scorenine[0]->score)){?>
<?php if($scorenine[0]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorenine[0]->score < 100 && $scorenine[0]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorenine[1]->score)){?>
<?php if($scorenine[1]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorenine[1]->score < 100 && $scorenine[1]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorenine[2]->score)){?>
<?php if($scorenine[2]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorenine[2]->score < 100 && $scorenine[2]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorenine[3]->score)){?>
<?php if($scorenine[3]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorenine[3]->score < 100 && $scorenine[3]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorenine[4]->score)){?>
<?php if($scorenine[4]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorenine[4]->score < 100 && $scorenine[4]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>



</div>
<div class="col-lg-3">
<?php if(Auth::user()->user_type == 'free'){ ?>
<a href="/upgrade" class="btn btn-info btn-rounded btn-md" style="width: 80%;">Upgrade to Continue</a>
				<?php } else { ?> 
			
<a href="/chapter-test?test=2&chapter=4&number=10&type=9" class="btn btn-md btn-rounded btn-canada">Begin Chapter</a>
				<?php }?>
</div>


</div>
<hr>
<div class="row text-center">
<div class="col-lg-4">

<p class="h5 dark-grey-text"><strong>Modern Canada</strong></h5>

</div>
<div class="col-lg-5">
<?php if(isset($scoreten[0]->score)){?>
<?php if($scoreten[0]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreten[0]->score < 100 && $scoreten[0]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreten[1]->score)){?>
<?php if($scoreten[1]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreten[1]->score < 100 && $scoreten[1]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreten[2]->score)){?>
<?php if($scoreten[2]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreten[2]->score < 100 && $scoreten[2]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreten[3]->score)){?>
<?php if($scoreten[3]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreten[3]->score < 100 && $scoreten[3]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreten[4]->score)){?>
<?php if($scoreten[4]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreten[4]->score < 100 && $scoreten[4]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>


</div>
<div class="col-lg-3">
<?php if(Auth::user()->user_type == 'free'){ ?>
<a href="/upgrade" class="btn btn-info btn-rounded btn-md" style="width: 80%;">Upgrade to Continue</a>
				<?php } else { ?> 
			
<a href="/chapter-test?test=2&chapter=5&number=10&type=10" class="btn btn-md btn-rounded btn-canada">Begin Chapter</a>
				<?php }?>
</div>


</div>
<hr>
<div class="row text-center">
<div class="col-lg-4">

<p class="h5 dark-grey-text"><strong>How Canadians Govern Themselves</strong></h5>

</div>
<div class="col-lg-5">
<?php if(isset($scoreeleven[0]->score)){?>
<?php if($scoreeleven[0]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreeleven[0]->score < 100 && $scoreeleven[0]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreeleven[1]->score)){?>
<?php if($scoreeleven[1]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreeleven[1]->score < 100 && $scoreeleven[1]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreeleven[2]->score)){?>
<?php if($scoreeleven[2]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreeleven[2]->score < 100 && $scoreeleven[2]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreeleven[3]->score)){?>
<?php if($scoreeleven[3]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreeleven[3]->score < 100 && $scoreeleven[3]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoreeleven[4]->score)){?>
<?php if($scoreeleven[4]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoreeleven[4]->score < 100 && $scoreeleven[4]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>



</div>
<div class="col-lg-3">
<?php if(Auth::user()->user_type == 'free'){ ?>
<a href="/upgrade" class="btn btn-info btn-rounded btn-md" style="width: 80%;">Upgrade to Continue</a>
				<?php } else { ?> 
			
<a href="/chapter-test?test=2&chapter=6&number=10&type=11" class="btn btn-md btn-rounded btn-canada">Begin Chapter</a>
				<?php } ?>
</div>


</div>
<hr>
<div class="row text-center">
<div class="col-lg-4">

<p class="h5 dark-grey-text"><strong>Federal Elections</strong></h5>

</div>
<div class="col-lg-5">
<?php if(isset($scoretwelve[0]->score)){?>
<?php if($scoretwelve[0]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoretwelve[0]->score < 100 && $scoretwelve[0]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoretwelve[1]->score)){?>
<?php if($scoretwelve[1]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoretwelve[1]->score < 100 && $scoretwelve[1]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoretwelve[2]->score)){?>
<?php if($scoretwelve[2]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoretwelve[2]->score < 100 && $scoretwelve[2]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoretwelve[3]->score)){?>
<?php if($scoretwelve[3]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoretwelve[3]->score < 100 && $scoretwelve[3]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoretwelve[4]->score)){?>
<?php if($scoretwelve[4]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoretwelve[4]->score < 100 && $scoretwelve[4]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>



</div>
<div class="col-lg-3">
<?php if(Auth::user()->user_type == 'free'){ ?>
<a href="/upgrade" class="btn btn-info btn-rounded btn-md" style="width: 80%;">Upgrade to Continue</a>
				<?php } else { ?> 
			
<a href="/chapter-test?test=2&chapter=7&number=10&type=12" class="btn btn-md btn-rounded btn-canada">Begin Chapter</a>
				<?php }?>
</div>


</div>
<hr>
<div class="row text-center">
<div class="col-lg-4">

<p class="h5 dark-grey-text"><strong>The Justice System</strong></h5>

</div>
<div class="col-lg-5">
<?php if(isset($scorethirteen[0]->score)){?>
<?php if($scorethirteen[0]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorethirteen[0]->score < 100 && $scorethirteen[0]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorethirteen[1]->score)){?>
<?php if($scorethirteen[1]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorethirteen[1]->score < 100 && $scorethirteen[1]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorethirteen[2]->score)){?>
<?php if($scorethirteen[2]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorethirteen[2]->score < 100 && $scorethirteen[2]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorethirteen[3]->score)){?>
<?php if($scorethirteen[3]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorethirteen[3]->score < 100 && $scorethirteen[3]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorethirteen[4]->score)){?>
<?php if($scorethirteen[4]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorethirteen[4]->score < 100 && $scorethirteen[4]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>


</div>
<div class="col-lg-3">
<?php if(Auth::user()->user_type == 'free'){ ?>
<a href="/upgrade" class="btn btn-info btn-rounded btn-md" style="width: 80%;">Upgrade to Continue</a>
				<?php } else { ?> 
			
<a href="/chapter-test?test=2&chapter=8&number=10&type=13" class="btn btn-md btn-rounded btn-canada">Begin Chapter</a>
				<?php }?>
</div>


</div>
<hr>
<div class="row text-center">
<div class="col-lg-4">

<p class="h5 dark-grey-text"><strong>Canadian Symbols</strong></h5>

</div>
<div class="col-lg-5">
<?php if(isset($scorefourteen[0]->score)){?>
<?php if($scorefourteen[0]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorefourteen[0]->score < 100 && $scorefourteen[0]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorefourteen[1]->score)){?>
<?php if($scorefourteen[1]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorefourteen[1]->score < 100 && $scorefourteen[1]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorefourteen[2]->score)){?>
<?php if($scorefourteen[2]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorefourteen[2]->score < 100 && $scorefourteen[2]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorefourteen[3]->score)){?>
<?php if($scorefourteen[3]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorefourteen[3]->score < 100 && $scorefourteen[3]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorefourteen[4]->score)){?>
<?php if($scorefourteen[4]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorefourteen[4]->score < 100 && $scorefourteen[4]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>


</div>
<div class="col-lg-3">
<?php if(Auth::user()->user_type == 'free'){ ?>
<a href="/upgrade" class="btn btn-info btn-rounded btn-md" style="width: 80%;">Upgrade to Continue</a>
				<?php } else { ?> 
			
<a href="/chapter-test?test=2&chapter=9&number=10&type=14" class="btn btn-md btn-rounded btn-canada">Begin Chapter</a>
				<?php }?>
</div>


</div>
<hr>
<div class="row text-center">
<div class="col-lg-4">

<p class="h5 dark-grey-text"><strong>Canada's Economy</strong></h5>

</div>
<div class="col-lg-5">
<?php if(isset($scorefifteen[0]->score)){?>
<?php if($scorefifteen[0]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorefifteen[0]->score < 100 && $scorefifteen[0]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorefifteen[1]->score)){?>
<?php if($scorefifteen[1]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorefifteen[1]->score < 100 && $scorefifteen[1]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorefifteen[2]->score)){?>
<?php if($scorefifteen[2]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorefifteen[2]->score < 100 && $scorefifteen[2]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorefifteen[3]->score)){?>
<?php if($scorefifteen[3]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorefifteen[3]->score < 100 && $scorefifteen[3]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scorefifteen[4]->score)){?>
<?php if($scorefifteen[4]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scorefifteen[4]->score < 100 && $scorefifteen[4]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>



</div>
<div class="col-lg-3">
<?php if(Auth::user()->user_type == 'free'){ ?>
<a href="/upgrade" class="btn btn-info btn-rounded btn-md" style="width: 80%;">Upgrade to Continue</a>
				<?php } else { ?> 
<a href="/chapter-test?test=2&chapter=10&number=10&type=15" class="btn btn-md btn-rounded btn-canada">Begin Chapter</a>
				<?php }?>
</div>


</div>
<hr>
<div class="row text-center">
<div class="col-lg-4">
<p class="h5 dark-grey-text"><strong>Canada's Regions</strong></h5>
</div>
<div class="col-lg-5">
<?php if(isset($scoresixteen[0]->score)){?>
<?php if($scoresixteen[0]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoresixteen[0]->score < 100 && $scoresixteen[0]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoresixteen[1]->score)){?>
<?php if($scoresixteen[1]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoresixteen[1]->score < 100 && $scoresixteen[1]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoresixteen[2]->score)){?>
<?php if($scoresixteen[2]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoresixteen[2]->score < 100 && $scoresixteen[2]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoresixteen[3]->score)){?>
<?php if($scoresixteen[3]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoresixteen[3]->score < 100 && $scoresixteen[3]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>
<?php if(isset($scoresixteen[4]->score)){?>
<?php if($scoresixteen[4]->score == 100){?>
<img src="/img/mountie.svg" />

<?php } elseif($scoresixteen[4]->score < 100 && $scoresixteen[4]->score > 69) {?>
<img src="/img/beer.svg" />

<?php } else {?>
<img src="/img/curling.svg" />

<?php }?>

<?php } else {?>
<img src="/img/blank.svg" />
<?php }?>


</div>
<div class="col-lg-3">
<?php if(Auth::user()->user_type == 'free'){ ?>
<a href="/upgrade" class="btn btn-info btn-rounded btn-md" style="width: 80%;">Upgrade to Continue</a>
				<?php } else { ?> 
			
<a href="/chapter-test?test=2&chapter=11&number=10&type=16" class="btn btn-md btn-rounded btn-canada">Begin Chapter</a>
				<?php }?>
</div>


</div>
</div>
	
</div>
	
	 
  
     
	
  

	</div>
  
  </div>

</div>

</div>
@include('footer')
  <!-- JavaScript Libraries -->
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
  <script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mo-js/0.288.1/mo.min.js"></script>

<script>
function Create2DArray(rows) {
  var arr = [];

  for (var i=0;i<rows;i++) {
     arr[i] = [];
  }

  return arr;
}

var scoreone = [];
scoreone[0] = [];
scoreone[0] = @json($score);
scoreone[1] = [];
scoreone[1] = @json($scoretwo);
scoreone[2] = [];
scoreone[2] = @json($scorethree);
scoreone[3] = [];
scoreone[3] = @json($scorefour);
scoreone[4] = [];
scoreone[4] = @json($scorefive);
scoreone[5] = [];
scoreone[5] = @json($scoresix);
scoreone[6] = [];
scoreone[6] = @json($scoreseven);
scoreone[7] = [];
scoreone[7] = @json($scoreeight);
scoreone[8] = [];
scoreone[8] = @json($scorenine);
scoreone[9] = [];
scoreone[9] = @json($scoreten);
scoreone[10] = [];
scoreone[10] = @json($scoreeleven);
scoreone[11] = [];
scoreone[11] = @json($scoretwelve);
scoreone[12] = [];
scoreone[12] = @json($scorethirteen);
scoreone[13] = [];
scoreone[13] = @json($scorefourteen);
scoreone[14] = [];
scoreone[14] = @json($scorefifteen);
scoreone[15] = [];
scoreone[15] = @json($scoresixteen);

	var data = [];
	for (var q = 0; q < 15; q++){
		
		if(scoreone[q].length === 0)
		{
			for (var n = 0; n < 9; n++) {
			scoreone[q][n] = [];
			scoreone[q][n].score = 0;							
			}
				} else {
					
				for (var x = 0; x < 10; x++){
			
			var what = typeof(scoreone[q][x]);
			if(what === 'undefined'){
		    scoreone[q][x] = [];
			scoreone[q][x].score = 0;
			}
				
				}
				/*
				if(scoreone[q][x].length === 0) {
					scoreone[q][x] = [];
					scoreone[q][x].score = 0;	
					
				} */
				}
			
			}
	
	
//line
var ctxL = document.getElementById("lineChart1").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["10", "9", "8", "7", "6", "5", "4", "3", "2", "1"],
    datasets: [{
      pointBackgroundColor: '#ff5555',
      backgroundColor: 'transparent',
      borderColor: 'rgba(255,85,85)',
      data: [
	  scoreone[0][9].score, 
	  scoreone[0][8].score, 
	  scoreone[0][7].score, 
	  scoreone[0][6].score, 
	  scoreone[0][5].score, 
	  scoreone[0][4].score, 
	  scoreone[0][3].score, 
	  scoreone[0][2].score, 
	  scoreone[0][1].score, 
	  scoreone[0][0].score 
],
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
          color: "transparent",
          zeroLineColor: "transparent"
        },
        ticks: {
          fontColor: "#ff5555",
		  		  fontSize: 16,

        },
      }],
      yAxes: [{
        display: true,
        gridLines: {
          display: true,
          drawBorder: false,
          color: "rgba(255,255,255,.25)",
          zeroLineColor: "rgba(255,255,255,.25)"
        },
        ticks: {
          fontColor: "#ffffff",
          beginAtZero: true,
          stepSize: 10
        },
      }],
    }
  }
});
//line
var ctxL = document.getElementById("lineChart2").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["10", "9", "8", "7", "6", "5", "4", "3", "2", "1"],
    datasets: [{
      pointBackgroundColor: '#ff5555',
      backgroundColor: 'transparent',
      borderColor: 'rgba(255,85,85)',
      data: [
	  scoreone[1][9].score, 
	  scoreone[1][8].score, 
	  scoreone[1][7].score, 
	  scoreone[1][6].score, 
	  scoreone[1][5].score, 
	  scoreone[1][4].score, 
	  scoreone[1][3].score, 
	  scoreone[1][2].score, 
	  scoreone[1][1].score, 
	  scoreone[1][0].score 
],
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
          color: "transparent",
          zeroLineColor: "transparent"
        },
        ticks: {
          fontColor: "#ff5555",
		  		  fontSize: 16,

        },
      }],
      yAxes: [{
        display: true,
        gridLines: {
          display: true,
          drawBorder: false,
          color: "rgba(255,255,255,.25)",
          zeroLineColor: "rgba(255,255,255,.25)"
        },
        ticks: {
          fontColor: "#ffffff",
          beginAtZero: true,
          stepSize: 10
        },
      }],
    }
  }
});
var ctxL = document.getElementById("lineChart3").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["10", "9", "8", "7", "6", "5", "4", "3", "2", "1"],
    datasets: [{
      pointBackgroundColor: '#ff5555',
      backgroundColor: 'transparent',
      borderColor: 'rgba(255,85,85)',
      data: [
	  scoreone[2][9].score, 
	  scoreone[2][8].score, 
	  scoreone[2][7].score, 
	  scoreone[2][6].score, 
	  scoreone[2][5].score, 
	  scoreone[2][4].score, 
	  scoreone[2][3].score, 
	  scoreone[2][2].score, 
	  scoreone[2][1].score, 
	  scoreone[2][0].score 
],
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
          color: "transparent",
          zeroLineColor: "transparent"
        },
        ticks: {
          fontColor: "#ff5555",
		  		  fontSize: 16,

        },
      }],
      yAxes: [{
        display: true,
        gridLines: {
          display: true,
          drawBorder: false,
          color: "rgba(255,255,255,.25)",
          zeroLineColor: "rgba(255,255,255,.25)"
        },
        ticks: {
          fontColor: "#ffffff",
          beginAtZero: true,
          stepSize: 10
        },
      }],
    }
  }
});
var ctxL = document.getElementById("lineChart4").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["10", "9", "8", "7", "6", "5", "4", "3", "2", "1"],
    datasets: [{
      pointBackgroundColor: '#ff5555',
      backgroundColor: 'transparent',
      borderColor: 'rgba(255,85,85)',
      data: [
	  scoreone[3][9].score, 
	  scoreone[3][8].score, 
	  scoreone[3][7].score, 
	  scoreone[3][6].score, 
	  scoreone[3][5].score, 
	  scoreone[3][4].score, 
	  scoreone[3][3].score, 
	  scoreone[3][2].score, 
	  scoreone[3][1].score, 
	  scoreone[3][0].score 
],
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
          color: "transparent",
          zeroLineColor: "transparent"
        },
        ticks: {
          fontColor: "#ff5555",
		  		  fontSize: 16,

        },
      }],
      yAxes: [{
        display: true,
        gridLines: {
          display: true,
          drawBorder: false,
          color: "rgba(255,255,255,.25)",
          zeroLineColor: "rgba(255,255,255,.25)"
        },
        ticks: {
          fontColor: "#ffffff",
          beginAtZero: true,
          stepSize: 10
        },
      }],
    }
  }
});
var ctxL = document.getElementById("lineChart5").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["10", "9", "8", "7", "6", "5", "4", "3", "2", "1"],
    datasets: [{
      pointBackgroundColor: '#ff5555',
      backgroundColor: 'transparent',
      borderColor: 'rgba(255,85,85)',
      data: [
	  scoreone[4][9].score, 
	  scoreone[4][8].score, 
	  scoreone[4][7].score, 
	  scoreone[4][6].score, 
	  scoreone[4][5].score, 
	  scoreone[4][4].score, 
	  scoreone[4][3].score, 
	  scoreone[4][2].score, 
	  scoreone[4][1].score, 
	  scoreone[4][0].score 
],
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
          color: "transparent",
          zeroLineColor: "transparent"
        },
        ticks: {
          fontColor: "#ff5555",
		  		  fontSize: 16,

        },
      }],
      yAxes: [{
        display: true,
        gridLines: {
          display: true,
          drawBorder: false,
          color: "rgba(255,255,255,.25)",
          zeroLineColor: "rgba(255,255,255,.25)"
        },
        ticks: {
          fontColor: "#ffffff",
          beginAtZero: true,
          stepSize: 10
        },
      }],
    }
  }
});
var ctxL = document.getElementById("lineChart6").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["10", "9", "8", "7", "6", "5", "4", "3", "2", "1"],
    datasets: [{
      pointBackgroundColor: '#ff5555',
      backgroundColor: 'transparent',
      borderColor: 'rgba(255,85,85)',
      data: [
	  scoreone[5][9].score, 
	  scoreone[5][8].score, 
	  scoreone[5][7].score, 
	  scoreone[5][6].score, 
	  scoreone[5][5].score, 
	  scoreone[5][4].score, 
	  scoreone[5][3].score, 
	  scoreone[5][2].score, 
	  scoreone[5][1].score, 
	  scoreone[5][0].score 
],
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
          color: "transparent",
          zeroLineColor: "transparent"
        },
        ticks: {
          fontColor: "#ff5555",
		  		  fontSize: 16,

        },
      }],
      yAxes: [{
        display: true,
        gridLines: {
          display: true,
          drawBorder: false,
          color: "rgba(255,255,255,.25)",
          zeroLineColor: "rgba(255,255,255,.25)"
        },
        ticks: {
          fontColor: "#ffffff",
          beginAtZero: true,
          stepSize: 10
        },
      }],
    }
  }
});


// Minimalist charts
$(function () {
  $('.min-chart#chart-pageviews').easyPieChart({
    barColor: "#3059B0",
    onStep: function (from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });
  $('.min-chart#chart-downloads').easyPieChart({
    barColor: "#3059B0",
    onStep: function (from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });
  $('.min-chart#chart-sales').easyPieChart({
    barColor: "#3059B0",
    onStep: function (from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });
});
</script>
@endsection
