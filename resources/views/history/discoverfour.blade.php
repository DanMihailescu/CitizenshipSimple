 <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.rawgit.com/afeld/bootstrap-toc/v0.3.0/dist/bootstrap-toc.min.css">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

		<script src="js/modernizr.custom.79639.js"></script>
<link rel="stylesheet" href="../css/mdb.min.css">
  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
	<script>
	var myFlashcards = [
    {question:"What is the supreme law of the land?",answer:"The Constitution"},{question:"What does the Constitution do?",answer:"* Sets up the government \n* Defines the government \n* Protects basic rights of Americans"},{question:"The idea of self-government is in the first three words of the Constitution. What are these words?",answer:"We the People}
	]
	</script>
<style>
body {background: #fff!important;}
.flashcard {
  width: 100%;
  margin: 0 auto;
}
.radio {
  position: relative;
  cursor: pointer;
  line-height: 20px;
  font-size: 14px;
  margin: 15px;
  margin-left:0;
}
.radio .label {
  position: relative;
  display: block;
  float: left;
  margin-right: 10px;
  width: 20px;
  height: 20px;
  border: 2px solid #c8ccd4;
  border-radius: 100%;
  -webkit-tap-highlight-color: transparent;
}
.radio .label:after {
  content: '';
  position: absolute;
  top: 3px;
  left: 3px;
  width: 10px;
  height: 10px;
  border-radius: 100%;
  background: #b4221c;
  transform: scale(0);
  transition: all 0.2s ease;
  opacity: 0.08;
  pointer-events: none;
}
.radio:hover .label:after {
  transform: scale(3.6);
}
input[type="radio"]:checked + .label {
  border-color: #b4221c;
}
input[type="radio"]:checked + .label:after {
  transform: scale(1);
  transition: all 0.2s cubic-bezier(0.35, 0.9, 0.4, 0.9);
  opacity: 1;
}
.footer > div {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  float: left;
  font-size: 1.2em;
  padding: 6px;
}

.stats {
  background-color: #324253;
  width: 100%;
}

.questions-count {
  display: inline-block;
}

.current-stats {
  float: right;
  margin-right: 20px;
}

.icon-stats {
  margin-right: 10px;
}
/*
*******************************
  Upload Area Styles
*******************************
*/

.upload {
  background-color: #606e7e;
  text-align: center;
  padding: 10px 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.upload label {
  text-transform: uppercase;
  font-weight: bold;
  cursor: pointer;
}

#questions-input-area, #load-questions {
  display: none;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
}

#load-questions {
  text-transform: uppercase;
  font-weight: bold;
  cursor: pointer;
}

/*
*******************************
  Controls: Correct, Wrong Styles
*******************************
*/

.correct, .wrong {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.controls div {
  width: 50%;
  text-align: center;
  padding: 25px 0;
  cursor: pointer;
  display: inline-block;
}

.controls label {
  font-size: 3em;
  cursor: pointer;
}

.correct {

}

.wrong {

}

/*
*******************************
  Question/ Answer Styles
*******************************
*/

.question, .answer {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.question p, .answer p {
  margin: 0;
  padding-bottom: 15px;
}

.answer p a {
  color: #fbfbfb;
}

.question {
  font-size: 1.3em;
}

.answer {
}

.answer p {
  display: none;
}

/*
</style>

<style>
#header {
	position: relative;
	border-bottom: 1px solid #ececec;
	z-index: 1;
}
.content-section {
font-size: 1.3em;
background: #fff;
line-height: 1.7em;
color: #333;
}
.sidebar-section {
  position: absolute;
  height: 100%;
  width: 100%;
}


.sidebar-item {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	
	/* Position the items */
	// &:nth-child(2) { top: 25%; }
	// &:nth-child(3) { top: 50%; }
	// &:nth-child(4) { top: 75%; }
}


.make-me-sticky {
  position: -webkit-sticky;
	position: sticky;
	top: 0;
    
  padding: 0 15px;
}



/* Ignore This, just coloring */
body {
  background: #fff;
}

article {
  padding: 25px 0 600px;
}


.title-section, .content-section, .sidebar-section {
  // border-radius: 12px;
}

.title-section {
  text-align: center;
  padding: 50px 15px;
  margin-bottom: 30px;
}

.content-section h2 {
  text-align: left;
  font-weight: bold;
  margin: 0;
  font-size: 1.2em;
 
  padding-bottom: 10px;
}

.sidebar-item {
  text-align: center;
  
  h2 {
    background: gold;
    max-width: 100%;
    margin: 0 auto;
    padding: 50px 0 100px; 
    border-bottom: solid 1px #fff;
  }
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}
#navbar {
  overflow: hidden;
  z-index: 3;
  padding-top: 5px;
}

.container .button-container{
  text-align: center;
  /*   margin-top: 10px;   */
}

.container .button-container button{
  font-size: 15px;
}

.container .button-container i{
  font-size: 25px;
}

.button-container button {
  padding: 10px 15px;
  font-weight: bold;
  background-color: transparent;
  border-radius: 5px;
  color: black;
}

.button-container {
  display: block;
  background: #dbdbdb;
}

.container button:hover {
/* cursor: pointer; */
}

.container button:focus {
  outline:0;
}

.container button.button-active {
/* 	background-color: gray; */
/* 	color: #374D57; */
}

.flag{
	position: absolute;
	top: 10px;
	right: 10px;
	border-radius: 51%;
	border: 0;
	width: 3em;
	height: 3em;
	font-size: .5em;
	color: white;
  background-color:#337ab7;
	}

.flag:focus{
  outline: 0;
}

/* entire container, keeps perspective */

.container .flip-container {
  margin: 0 auto;
	-webkit-perspective: 1000;
	-moz-perspective: 1000;
	-ms-perspective: 1000;
	perspective: 1000;
	-ms-transform: perspective(1000px);
	-moz-transform: perspective(1000px);
	-moz-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
}

/* flip the pane  */
.container .flip-container.flipped .flipper, .container .flip-container.flipped .flipper {
	-webkit-transform: rotateY(180deg);
	-moz-transform: rotateY(180deg);
	-o-transform: rotateY(180deg);
	transform: rotateY(180deg);
}

.container .flip-container, .front, .back {
	width: 300px;
	height: 200px;
/* 	border-radius: 24px; */
	box-sizing: border-box;
}

@media only screen and (max-width: 768px) {
	.flip-container {
/* 		margin: 10vh auto; */
	}

	.flip-container, .front, .back {
		width: 150vw;
		height: 80vh;
	}
}

.front, .back {
	text-align: center;
	font-family: 'Arvo';
	font-size: 2.4em;
	line-height: 1em;
	padding-top: calc(50% - 3em);
	color: #ffffff;
/* 	border: 1px solid #95A39D; */
}

/* flip speed goes here */
.flipper {
	-webkit-transition: 0.2s;
	-webkit-transform-style: preserve-3d;
	-ms-transition: 0.2s;
	-moz-transition: 0.2s;
	-moz-transform: perspective(1000px);
	-moz-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transition: 0.2s;
	transform-style: preserve-3d;
	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-transition: 0.3s;
	-webkit-transform-style: preserve-3d;
	-webkit-transform: rotateY(0deg);
	-moz-transition: 0.3s;
	-moz-transform-style: preserve-3d;
	-moz-transform: rotateY(0deg);
	-o-transition: 0.3s;
	-o-transform-style: preserve-3d;
	-o-transform: rotateY(0deg);
	-ms-transition: 0.3s;
	-ms-transform-style: preserve-3d;
	-ms-transform: rotateY(0deg);
	transition: 0.3s;
	transform-style: preserve-3d;
	transform: rotateY(0deg);
	position: absolute;
	top: 0;
	left: 0;
  box-shadow: 10px 10px 16px -1px rgba(163,163,163,0.4);
}

/* front pane, placed above back */
.front {
/* 	z-index: 2; */
  /* for firefox 31 */
	-webkit-transform: rotateY(0deg);
	-ms-transform: rotateY(0deg);
	background-color: #337ab7;
}

/* back, initially hidden pane */
.back {
	-webkit-transform: rotateY(-180deg);
	-moz-transform: rotateY(-180deg);
	-o-transform: rotateY(-180deg);
	-ms-transform: rotateY(-180deg);
	transform: rotateY(-180deg);
	background-color: #2BBE83;
}

.container .refresh {
  border: 0;
}

.container .refresh:hover {
  border: 0;
  background-color: transparent;
}
.mark1, .mark2, .mark3, .mark4 {background: none;}
</style>

</head>

<body data-spy="scroll" data-target="#toc">
<audio id="ding">
  <source src="../sounds/ding.mp3" type="audio/mpeg">
</audio>
<audio id="wrong">
  <source src="../sounds/wrong.mp3" type="audio/mpeg">
</audio>
<audio id="applause">
  <source src="../sounds/applause.mp3" type="audio/mpeg">
</audio>

  
      <div class="container">
<div class="row">
<div class="col-12 text-right">
<a href="/discover-canada" class="text-right btn btn-rounded btn-sm btn-outline-grey btn-flat">Exit <i class="fas fa-external-link-alt"></i></a>
</div></div>

  <!--Section: Content-->
  <section class="mx-md-5 dark-grey-text">

<style>
    	.rgba-black-gradient {
      	background: linear-gradient(to top, rgba(0,0,0,.8) 55%,rgba(0,0,0,0) 100%);
    	}
    </style>
	<h1 class="pink-text" style="font-weight: bold;margin-top: 50px;">Canada's History</h1>
   <div class="d-flex justify-content-between progressbar">
            <small class="text-muted">Section Progress</small>
            <small><span><strong>4</strong></span>/<span></span>12</small>
          </div>
          <div class="progress lg-progress">
            <div id="progressbar" class="progress-bar bg-danger animated flash" style="width: 25%;" role="progressbar"></div>
          </div>
		 
	
	                <div class="content-section discovercontent" style="padding-top: 20px;">


<h2 style="font-weight: normal; font-size: 1.5em;padding-top: 20px;" >
					Struggle for a Continent

					</h2>
					<p>
In 1670, King Charles II of England granted the Hudson’s Bay Company exclusive trading rights over the watershed draining into Hudson Bay. For the next 100 years the Company competed with Montreal-based traders. The skilled and courageous men who travelled by canoe were called voyageurs and coureurs des bois, and formed strong alliances with First Nations.

</p><p>
English colonies along the Atlantic seaboard, dating from the early 1600s, eventually became richer and more populous than New France. In the 1700s France and Great Britain battled for control of North America. In 1759, the British defeated the French in the Battle of the Plains of Abraham at Québec City — marking the end of France’s empire in America. The commanders of both armies, Brigadier James Wolfe and the Marquis de Montcalm, were killed leading their troops in battle.

		</p>
	<div class="text-right"> <button type="button" class="btn btn-danger btn-rounded
 nextbutton">Next <i class="fas fa-magic mr-1"></i></button>  </div>

<div style="height: 100px;width: 100%;"></div>

</section>

  <section class="congratulations text-center px-md-5 mx-md-5 dark-grey-text" style="display: none; padding-top: 25px;">
    
    <div class="row mb-5">
      <div class="col-md-4 mx-auto">
        <div class="view mb-4 pb-2">
          <img src="../img/thumbs-up.svg" class="img-fluid thumb" alt="smaple image">
        </div>
      </div>
    </div>

    <h3 class="font-weight-bold mb-4 pb-2">Great Job!</h3>
    
    <p class="text-center mx-auto mb-4 pb-2">You've just completed your fourth section on Canadian History. Keeping going, or save your progress for later.</p>
    
       <a href="/discover-canada" class="btn btn-deep-purple btn-rounded">Save and Exit</a>
 <a href="/canadas-history/quebec" class="btn btn-danger btn-rounded">Continue Training</a>

  </section>
  <!--Section: Content-->
<section class="tryagain text-center px-md-5 mx-md-5 dark-grey-text" style="display: none; padding-top: 25px;">
    
    <div class="row mb-5">
      <div class="col-md-4 mx-auto">
        <div class="view mb-4 pb-2">
          <img src="../img/studying.svg" class="img-fluid thumb" alt="smaple image">
        </div>
      </div>
    </div>

    <h3 class="font-weight-bold mb-4 pb-2">Oops!</h3>
    
    <p class="text-center mx-auto mb-4 pb-2">You've got a wrong answer. Try rereading the section again or retake the test</p>
    
       <button type="button" class="btn btn-deep-purple btn-rounded reread">Reread Section</button>
  <button type="button" class="btn btn-danger btn-rounded retake">Retake Test</button>


  </section>
  <!--Section: Content-->

<div class="row quizmini" style="display:none;"><div class="col-1"></div>
<div class="col-10">
  
<div class="text-left" style="padding-top: 30px;padding-bottom: 0px;"><h4><b>Correctly answer <u><b>2</b></u> teaser questions in a row to continue...</b></h4></div>
<div class="text-left" style="padding-bottom: 20px;">
<a class="one btn-floating btn-sm"></a>

 <a class="two btn-floating btn-sm "></a>

</div>
<section class="content" id="quiz">

 </section>
 <hr>
   <button class="btn btn-primary btn-rounded" id="next">Next</button>
 </div>

 </div>
 </div>

</div></div>


 <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.rawgit.com/afeld/bootstrap-toc/v0.3.0/dist/bootstrap-toc.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/mobile-nav/mobile-nav.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>
 
<script>


// Create a quiz object with a title and two questions.
// A question has one or more answer, and one or more is valid.
$(document).ready(function(){
  "use strict";
  
  function progress(percent, $element) {
    var progressBarWidth = percent * $element.width() / 100;
    $element.find('div').animate({ width: progressBarWidth }, 500).html(percent + "% ");
}
  
  var vnumCorrect = 0;


 
var darray = @json($questions);
	var questions = [];	
	
    for (var q = 0; q < darray.length; q++) {
	questions[q] = [];
	questions[q].choices = [];
	questions[q].question = darray[q].question;
	questions[q].choices = [darray[q].answerone, darray[q].answertwo, darray[q].answerthree, darray[q].answerfour]; 
	questions[q].correctAnswer = darray[q].correct - 1;
	if (darray[q].correct == 1){
	questions[q].answerStore = darray[q].answerone;
	}
	if (darray[q].correct == 2){
	questions[q].answerStore = darray[q].answertwo;
	}
	if (darray[q].correct == 3){
	questions[q].answerStore = darray[q].answerthree;
	}
	if (darray[q].correct == 4){
	questions[q].answerStore = darray[q].answerfour;
	}
	questions[q].chapter = darray[q].chapter;
	questions[q].section = darray[q].section;
	questions[q].difficulty = darray[q].difficulty;
	
	}
  
  function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}
  $('.nextbutton').click(function(){
	$('.discovercontent').fadeOut(600);
	$('.select').fadeOut(600);
	setTimeout(function(){jQuery('.quizmini').fadeIn()}, 600);
shuffle(questions);
displayNext();
	  $('#warning').text('');

	
});
  var questionCounter = 0; //Tracks question number
  var numWrong = 0;
  var selections = []; //Array containing user choices
  var quiz = $('.content'); //Quiz div object
var x = document.getElementById("ding");
var y = document.getElementById("applause");
var z = document.getElementById("wrong");

function playDing() {
  x.play();
}
function playWrong() {
  z.play();
}
function playApplause() {
  y.play();
}
  // Display initial question
  
  // Click handler for the 'next' button
  $('#next').on('click', function (e) {
    e.preventDefault();
    
    // Suspend click listener during fade animation
    if(quiz.is(':animated')) {        
      return false;
    }
    choose();
    
    // If no user selection, progress is stopped
    if (isNaN(selections[questionCounter])) {
      $('#warning').text('Please make a selection!');
    } else {
      if (selections[questionCounter] === questions[questionCounter].correctAnswer) {
		if (questionCounter == 0){	
			$('.one').addClass('bg-danger');
			      $('.one').append('<i class="fas fa-check"></i>');
				  playDing();
							  vnumCorrect++;
		}
		if (questionCounter == 1){
			$('.two').addClass('bg-danger');
						      $('.two').append('<i class="fas fa-check"></i>');
							  playDing();
							  vnumCorrect++;


		}
		if (questionCounter == 2){
			$('.three').addClass('bg-danger');
						      $('.three').append('<i class="fas fa-check"></i>');
							  playApplause();
							  vnumCorrect++;


		}

      } else {
		    numWrong = 1;
			playWrong();
			  
	  }
    
		if (vnumCorrect < 3 && numWrong == 0) {
      questionCounter++;
      displayNext();
	  $('#warning').text('');
		} else {
			if(vnumCorrect == 3) {
			$('.quizmini').hide();
			$('.congratulations').fadeIn(600);
			$('.thumb').addClass('animated');
			$('.thumb').addClass('zoomIn');
			$('#progressbar').animate({ width: "33%"}, 1000);		
   $.ajax({

           type:'POST',
           url:'/discoverytrackpost',
           data:{"module": 4, "section":4, "completion":"yes", "_token": "{{ csrf_token() }}", "nextsec":"quebec"},
           error: function(jqXHR, textStatus, errorThrown) {
           alert('An error occurred... Look at the console (F12 or Ctrl+Shift+I, Console tab) for more information!');
		   $('#result').html('<p>status code: '+jqXHR.status+'</p><p>errorThrown: ' + errorThrown + '</p><p>jqXHR.responseText:</p><div>'+jqXHR.responseText + '</div>');
                console.log('jqXHR:');
                console.log(jqXHR);
                console.log('textStatus:');
                console.log(textStatus);
                console.log('errorThrown:');
                console.log(errorThrown);
            },
           success:function(data){

              if (data.success == 'yes'){
				  

			  };

           }

        });

			} else {
					$('.one').removeClass('bg-danger');
					$('.one').append('');
					$('.two').removeClass('bg-danger');
					$('.two').append('');
							  	$('.three').removeClass('bg-danger');
						      $('.three').append('');
			vnumCorrect = 0;
			numWrong = 0;
			questionCounter = 0;
			selections = [];
			shuffle(questions);
			$('.quizmini').hide();
			$('.tryagain').fadeIn(600);
			$('.thumb').addClass('animated');
			$('.thumb').addClass('zoomIn');
			
			
			}
		}
    }
  });
    $('.reread').on('click', function (e) {
    e.preventDefault();
	$('.tryagain').fadeOut(600);
	$('.discovercontent').fadeIn(600);
	$('.select').fadeIn(600);	
	$('.thumb').removeClass('animated');
	$('.thumb').removeClass('zoomIn');
	});
	 $('.retake').on('click', function (e) {
    e.preventDefault();
	displayNext();
	$('.tryagain').fadeOut(600);

	setTimeout(function(){jQuery('.quizmini').fadeIn()}, 600);
	$('.thumb').removeClass('animated');
	$('.thumb').removeClass('zoomIn');
	});
	
	
  // Click handler for the 'prev' button
  $('#prev').on('click', function (e) {
    e.preventDefault();
    
    if(quiz.is(':animated')) {
      return false;
    }
    choose();
    questionCounter--;
    displayNext();
  });
  
  // Click handler for the 'Start Over' button
  $('#start').on('click', function (e) {
    e.preventDefault();
    
    if(quiz.is(':animated')) {
      return false;
    }
    questionCounter = 0;
    selections = [];
    displayNext();
    $('#start').hide();
  });
  
  // Creates and returns the div that contains the questions and 
  // the answer selections
  function createQuestionElement(index) {
    var qElement = $('<div>', {
      id: 'question'
    });
    
    var question = $('<h4><b>g').append(questions[index].question);
    qElement.append(question);
        qElement.append('</b></h4>');

    var radioButtons = createRadios(index);
    qElement.append(radioButtons);

	// this is new
	var warningText = $('<p id="warning">');
	qElement.append(warningText);
	
	return qElement;

  }
  
  // Creates a list of the answer choices as radio inputs
  function createRadios(index) {
    var radioList = $('<div class="abox">');
    var input = '';
    for (var i = 0; i < questions[index].choices.length; i++) {
     
      input = '<div><label for="opt' + i + '" class="radio"><input type="radio" name="answer" class="hidden" id="opt' + i + '" value=' + i + ' />  <span class="label"></span>';
      input += questions[index].choices[i] + '</label></div>';
      radioList.append(input);
	  radioList.append('</div>');
    }
    return radioList;
  }
  
  // Reads the user selection and pushes the value to an array
  function choose() {
    selections[questionCounter] = +$('input[name="answer"]:checked').val();
  }
  
  // Displays next requested element
  function displayNext() {
    quiz.fadeOut(function() {
      $('#question').remove();

      if(questionCounter < questions.length){
        var nextQuestion = createQuestionElement(questionCounter);
        quiz.append(nextQuestion).fadeIn();
        if (!(isNaN(selections[questionCounter]))) {
          $('input[value='+selections[questionCounter]+']').prop('checked', true);
        }
        
        // Controls display of 'prev' button
        if(questionCounter === 1){
          $('#prev').show();
        } else if(questionCounter === 0){
          
          $('#prev').hide();
          $('#next').show();
        }
       }else {
        var scoreElem = displayScore();
        quiz.append(scoreElem).fadeIn();
        $('#next').hide();
        $('#prev').hide();
        $('#start').show();
      }
    });
  }
  
  // Computes score and returns a paragraph element to be displayed
  function displayScore() {
    var score = $('<h3>',{id: 'question'});
	var inp = '';
    var numCorrect = 0;
    for (var i = 0; i < selections.length; i++) {
      if (selections[i] === questions[i].correctAnswer) {
        numCorrect++;
		inp = '<div>'+ questions[i].question + '</div><div>' + questions[i].choices[selections[i]] + '</div>';
		inp += '<div>' + questions[i].answerStore + '</div>';
		
      } else {
		inp += '<div>'+ questions[i].question + '</div><div>' + questions[i].choices[selections[i]] + '</div>';
		inp += '<div>' + questions[i].answerStore + ' WRONG</div>';
		  
	  }
    }
	// Calculate score and display relevant message
	var percentage = numCorrect / questions.length;
	if (percentage >= 0.9){
    	score.append('<nav class="navbar navbar-default navbar-fixed-top"><div class="row"> \
			<div class="col-sm-3"> \
				<div class="rating-block"> \
					<h4>Average user rating</h4> \
					<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2> \
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"> \
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> \
					</button> \
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"> \
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> \
					</button> \
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"> \
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>  \
					</button> \
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align"> \
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> \
					</button> \
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align"> \
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> \
					</button> \
				</div> \
					<div class="col-sm-3"> \
				<h4>Rating breakdown</h4> \
				<div class="pull-left"> \
					<div class="pull-left" style="width:35px; line-height:1;"> \
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div> \
					</div> \
					<div class="pull-left" style="width:180px;"> \
						<div class="progress" style="height:9px; margin:8px 0;"> \
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%"> \
							<span class="sr-only">80% Complete (danger)</span> \
						  </div> \
						</div> \
					</div> \
					<div class="pull-right" style="margin-left:10px;">1</div> \
				</div> \
				<div class="pull-left"> \
					<div class="pull-left" style="width:35px; line-height:1;"> \
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div> \
					</div> \
					<div class="pull-left" style="width:180px;"> \
						<div class="progress" style="height:9px; margin:8px 0;"> \
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%"> \
							<span class="sr-only">80% Complete (danger)</span> \
						  </div> \
						</div> \
					</div> \
					<div class="pull-right" style="margin-left:10px;">1</div> \
				</div> \
				<div class="pull-left"> \
					<div class="pull-left" style="width:35px; line-height:1;"> \
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div> \
					</div> \
					<div class="pull-left" style="width:180px;"> \
						<div class="progress" style="height:9px; margin:8px 0;"> \
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%"> \
							<span class="sr-only">80% Complete (danger)</span> \
						  </div> \
						</div> \
					</div> \
					<div class="pull-right" style="margin-left:10px;">0</div> \
				</div> \
				<div class="pull-left"> \
					<div class="pull-left" style="width:35px; line-height:1;"> \
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div> \
					</div> \
					<div class="pull-left" style="width:180px;"> \
						<div class="progress" style="height:9px; margin:8px 0;"> \
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%"> \
							<span class="sr-only">80% Complete (danger)</span> \
						  </div> \
						</div> \
					</div> \
					<div class="pull-right" style="margin-left:10px;">0</div> \
				</div> \
				<div class="pull-left"> \
					<div class="pull-left" style="width:35px; line-height:1;"> \
						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div> \
					</div> \
					<div class="pull-left" style="width:180px;"> \
						<div class="progress" style="height:9px; margin:8px 0;"> \
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%"> \
							<span class="sr-only">80% Complete (danger)</span> \
						  </div> \
						</div> \
					</div> \
					<div class="pull-right" style="margin-left:10px;">0</div> \
				</div> \
			</div>			 \
		</div>			 \
		 \
			</div>');
	}
	
	else if (percentage >= 0.7){
    	score.append('Good job! You got ' + numCorrect + ' out of ' +
                 questions.length + ' questions right!' + inp);
	}
	
	else if (percentage >= 0.5){
    	score.append('You got ' + numCorrect + ' out of ' +
                 questions.length + ' questions right.' + inp);
	}
	
	else {
  	score.append('<nav class="navbar navbar-default navbar-fixed-top"><div class="row"> \
			<div class="col-sm-3"> \
				<div class="rating-block"> \
					<h4>Average user rating</h4> \
					<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2> \
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"> \
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> \
					</button> \
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"> \
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> \
					</button> \
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"> \
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>  \
					</button> \
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align"> \
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> \
					</button> \
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align"> \
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> \
					</button> \
				</div> \
					<div class="col-sm-3"> \
				<h4>Rating breakdown</h4> \
				<div class="pull-left"> \
					<div class="pull-left" style="width:35px; line-height:1;"> \
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div> \
					</div> \
					<div class="pull-left" style="width:180px;"> \
						<div class="progress" style="height:9px; margin:8px 0;"> \
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%"> \
							<span class="sr-only">80% Complete (danger)</span> \
						  </div> \
						</div> \
					</div> \
					<div class="pull-right" style="margin-left:10px;">1</div> \
				</div> \
				<div class="pull-left"> \
					<div class="pull-left" style="width:35px; line-height:1;"> \
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div> \
					</div> \
					<div class="pull-left" style="width:180px;"> \
						<div class="progress" style="height:9px; margin:8px 0;"> \
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%"> \
							<span class="sr-only">80% Complete (danger)</span> \
						  </div> \
						</div> \
					</div> \
					<div class="pull-right" style="margin-left:10px;">1</div> \
				</div> \
				<div class="pull-left"> \
					<div class="pull-left" style="width:35px; line-height:1;"> \
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div> \
					</div> \
					<div class="pull-left" style="width:180px;"> \
						<div class="progress" style="height:9px; margin:8px 0;"> \
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%"> \
							<span class="sr-only">80% Complete (danger)</span> \
						  </div> \
						</div> \
					</div> \
					<div class="pull-right" style="margin-left:10px;">0</div> \
				</div> \
				<div class="pull-left"> \
					<div class="pull-left" style="width:35px; line-height:1;"> \
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div> \
					</div> \
					<div class="pull-left" style="width:180px;"> \
						<div class="progress" style="height:9px; margin:8px 0;"> \
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%"> \
							<span class="sr-only">80% Complete (danger)</span> \
						  </div> \
						</div> \
					</div> \
					<div class="pull-right" style="margin-left:10px;">0</div> \
				</div> \
				<div class="pull-left"> \
					<div class="pull-left" style="width:35px; line-height:1;"> \
						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div> \
					</div> \
					<div class="pull-left" style="width:180px;"> \
						<div class="progress" style="height:9px; margin:8px 0;"> \
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%"> \
							<span class="sr-only">80% Complete (danger)</span> \
						  </div> \
						</div> \
					</div> \
					<div class="pull-right" style="margin-left:10px;">0</div> \
				</div> \
			</div>			 \
		</div>			 \
		 \
			</div>');
	}
    return score;
  }
});
  </script>



  <!-- Template Main Javascript File -->
  <script>

  </script>
  
</body>
</html>