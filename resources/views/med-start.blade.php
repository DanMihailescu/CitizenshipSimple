<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CitizenshipSimple: Medium Practice Test Start</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
<script src="js/modernizr.custom.79639.js"></script>
<style>
@import url(https://fonts.googleapis.com/css?family=Lobster);
.circle-chart__percent {
	
	font-family: 'Lobster';
	color:#ff5555!important;
	font-size: 0.9em;

	
}

</style>
<style>
.card-button {border: 5px solid #ececec;shadow: none;border-radius: 15px;}
  .pills-peach-gradient .nav-item .nav-link.active {
        background: linear-gradient(40deg, #FFD86F, #FC6262);
    }
    .pills-blue-gradient .nav-item .nav-link.active {
        background: linear-gradient(40deg, #45cafc, #303f9f);
    }
    .pills-purple-gradient .nav-item .nav-link.active {
        background: linear-gradient(40deg, #ff6ec4, #7873f5);
    }
    .pills-aqua-gradient .nav-item .nav-link.active {
        background: linear-gradient(40deg, #2096ff, #05ffa3);
    }

    .pills-success .nav-item .dropdown-toggle.nav-link:focus {
        background-color: #00C851;
        color: #fff;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }

    .pills-rounded .nav-item .nav-link {
        border-radius: 10em;
    }
    .pills-light-purple .nav-item .nav-link.active {
        background-color: #ba68c8;
    }

    .pills-outline-red .nav-item .nav-link {
        border: 2px solid #fff;
        color: #666;
        background-color: transparent;
    }
    .pills-outline-red .nav-item .nav-link:hover {
        border: 2px solid #eee;
    }
    .pills-outline-red .nav-item .nav-link.active {
        border: 2px solid #f44336;
        color: #f44336;
    }
    .pills-outline-red .nav-item .nav-link.active:hover {
        border: 2px solid #f44336;
        color: #f44336;
    }

    .pills-outline-green .nav-item .nav-link {
        border: 2px solid #fff;
        color: #666;
        background-color: transparent;
    }
    .pills-outline-green .nav-item .nav-link:hover {
        border: 2px solid #eee;
    }
    .pills-outline-green .nav-item .nav-link.active {
        border: 2px solid #4caf50;
        color: #4caf50;
    }
    .pills-outline-green .nav-item .nav-link.active:hover {
        border: 2px solid #4caf50;
        color: #4caf50;
    }

    .pills-blue-teal .nav-item .nav-link.active {
        background-color: #4fc3f7;
        -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
        -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
        animation-name: example;
        animation-duration: 4s;
    }
    /* Safari 4.0 - 8.0 */
    @-webkit-keyframes example {
        from {background-color: #4fc3f7;}
        to {background-color: #009688;}
    }

    /* Standard syntax */
    @keyframes example {
        from {background-color: #4fc3f7;}
        to {background-color: #009688;}
    }

    .pills-outline-purple-anm .nav-item .nav-link.active {
        border: 2px solid #9c27b0;
        color: #9c27b0;
        background-color: transparent;
        -webkit-animation-name: outline; /* Safari 4.0 - 8.0 */
        -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
        animation-name: outline;
        animation-duration: 4s;
    }
    /* Safari 4.0 - 8.0 */
    @-webkit-keyframes outline {
        from {border: 2px solid #9c27b0; color: #9c27b0;}
        to {border: 2px solid #f48fb1; color: #f48fb1;}
    }

    /* Standard syntax */
    @keyframes outline {
        from {border: 2px solid #9c27b0; color: #9c27b0;}
        to {border: 2px solid #f48fb1; color: #f48fb1;}
    }

    .pills-orange-anm .nav-item .nav-link.active {
        background-color: #ffa000 ;
        -webkit-animation-name: orange; /* Safari 4.0 - 8.0 */
        -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
        animation-name: orange;
        animation-duration: 4s;
    }
    /* Safari 4.0 - 8.0 */
    @-webkit-keyframes orange {
        from {background-color: #ffa000 ;}
        to {background-color: #f44336;}
    }

    /* Standard syntax */
    @keyframes orange {
        from {background-color: #ffa000 ;}
        to {background-color: #f44336;}
    }
</style>
<style>
.btn-danger {background: #ff5555;color: #ff5555; border-color: #ff5555;"}
body:not(.loaded) *:not(.spinner, .spinner > .path) {
  -moz-animation: none !important;
  -webkit-animation: none !important;
  animation: none !important;
}
.layer-1 > .path {
  stroke: rgba(234, 234, 234, 0.5);
  stroke-width: 15;
  stroke-dasharray: 1507.2;
  stroke-dashoffset: 1507.2;
  visibility: hidden;
  -moz-transform: rotate(-30deg);
  -ms-transform: rotate(-30deg);
  -webkit-transform: rotate(-30deg);
  transform: rotate(-30deg);
}
.loaded .layer-1 > .path {
  visibility: visible;
  -moz-animation: layer-1 1.25s ease-in;
  -webkit-animation: layer-1 1.25s ease-in;
  animation: layer-1 1.25s ease-in;
}

@-moz-keyframes layer-1 {
  0% {
    stroke-dasharray: 1507.2;
    stroke-dashoffset: 1507.2;
  }
  75% {
    stroke-width: 15;
    stroke-dashoffset: 753.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 45;
    stroke-width: 225;
    stroke-dasharray: 1513.48;
    stroke-dashoffset: 0;
    -moz-transform: rotate(450deg);
    transform: rotate(450deg);
  }
}
@-webkit-keyframes layer-1 {
  0% {
    stroke-dasharray: 1507.2;
    stroke-dashoffset: 1507.2;
  }
  75% {
    stroke-width: 15;
    stroke-dashoffset: 753.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 45;
    stroke-width: 225;
    stroke-dasharray: 1513.48;
    stroke-dashoffset: 0;
    -webkit-transform: rotate(450deg);
    transform: rotate(450deg);
  }
}
@keyframes layer-1 {
  0% {
    stroke-dasharray: 1507.2;
    stroke-dashoffset: 1507.2;
  }
  75% {
    stroke-width: 15;
    stroke-dashoffset: 753.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 45;
    stroke-width: 225;
    stroke-dasharray: 1513.48;
    stroke-dashoffset: 0;
    -moz-transform: rotate(450deg);
    -ms-transform: rotate(450deg);
    -webkit-transform: rotate(450deg);
    transform: rotate(450deg);
  }
}
.layer-2 > .path {
  stroke: rgba(234, 234, 234, 0.3);
  stroke-width: 20;
  stroke-dasharray: 1507.2;
  stroke-dashoffset: 1507.2;
  visibility: hidden;
  -moz-transform: rotate(-60deg);
  -ms-transform: rotate(-60deg);
  -webkit-transform: rotate(-60deg);
  transform: rotate(-60deg);
}
.loaded .layer-2 > .path {
  visibility: visible;
  -moz-animation: layer-2 1.25s ease-in;
  -webkit-animation: layer-2 1.25s ease-in;
  animation: layer-2 1.25s ease-in;
}

@-moz-keyframes layer-2 {
  0% {
    stroke-dasharray: 1507.2;
    stroke-dashoffset: 1507.2;
  }
  75% {
    stroke-width: 20;
    stroke-dashoffset: 753.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 60;
    stroke-dasharray: 1513.48;
    stroke-dashoffset: 0;
    -moz-transform: rotate(420deg);
    transform: rotate(420deg);
  }
}
@-webkit-keyframes layer-2 {
  0% {
    stroke-dasharray: 1507.2;
    stroke-dashoffset: 1507.2;
  }
  75% {
    stroke-width: 20;
    stroke-dashoffset: 753.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 60;
    stroke-dasharray: 1513.48;
    stroke-dashoffset: 0;
    -webkit-transform: rotate(420deg);
    transform: rotate(420deg);
  }
}
@keyframes layer-2 {
  0% {
    stroke-dasharray: 1507.2;
    stroke-dashoffset: 1507.2;
  }
  75% {
    stroke-width: 20;
    stroke-dashoffset: 753.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 60;
    stroke-dasharray: 1513.48;
    stroke-dashoffset: 0;
    -moz-transform: rotate(420deg);
    -ms-transform: rotate(420deg);
    -webkit-transform: rotate(420deg);
    transform: rotate(420deg);
  }
}
.layer-3 > .path {
  stroke: rgba(234, 234, 234, 0.8);
  stroke-width: 40;
  stroke-dasharray: 1130.4;
  stroke-dashoffset: 1130.4;
  visibility: hidden;
  -moz-transform: rotate(-70deg);
  -ms-transform: rotate(-70deg);
  -webkit-transform: rotate(-70deg);
  transform: rotate(-70deg);
}
.loaded .layer-3 > .path {
  visibility: visible;
  -moz-animation: layer-3 1.25s ease-in;
  -webkit-animation: layer-3 1.25s ease-in;
  animation: layer-3 1.25s ease-in;
}

@-moz-keyframes layer-3 {
  0% {
    stroke-dasharray: 1130.4;
    stroke-dashoffset: 1130.4;
  }
  75% {
    stroke-width: 40;
    stroke-dashoffset: 565.2;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 120;
    stroke-dasharray: 1136.68;
    stroke-dashoffset: 0;
    -moz-transform: rotate(410deg);
    transform: rotate(410deg);
  }
}
@-webkit-keyframes layer-3 {
  0% {
    stroke-dasharray: 1130.4;
    stroke-dashoffset: 1130.4;
  }
  75% {
    stroke-width: 40;
    stroke-dashoffset: 565.2;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 120;
    stroke-dasharray: 1136.68;
    stroke-dashoffset: 0;
    -webkit-transform: rotate(410deg);
    transform: rotate(410deg);
  }
}
@keyframes layer-3 {
  0% {
    stroke-dasharray: 1130.4;
    stroke-dashoffset: 1130.4;
  }
  75% {
    stroke-width: 40;
    stroke-dashoffset: 565.2;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 120;
    stroke-dasharray: 1136.68;
    stroke-dashoffset: 0;
    -moz-transform: rotate(410deg);
    -ms-transform: rotate(410deg);
    -webkit-transform: rotate(410deg);
    transform: rotate(410deg);
  }
}
.layer-4 > .path {
  stroke: rgba(234, 234, 234, 0.6);
  stroke-width: 20;
  stroke-dasharray: 1507.2;
  stroke-dashoffset: 1507.2;
  visibility: hidden;
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
.loaded .layer-4 > .path {
  visibility: visible;
  -moz-animation: layer-4 1.25s ease-in;
  -webkit-animation: layer-4 1.25s ease-in;
  animation: layer-4 1.25s ease-in;
}

@-moz-keyframes layer-4 {
  0% {
    stroke-dasharray: 1507.2;
    stroke-dashoffset: 1507.2;
  }
  75% {
    stroke-width: 20;
    stroke-dashoffset: 753.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 60;
    stroke-dasharray: 1513.48;
    stroke-dashoffset: 0;
    -moz-transform: rotate(390deg);
    transform: rotate(390deg);
  }
}
@-webkit-keyframes layer-4 {
  0% {
    stroke-dasharray: 1507.2;
    stroke-dashoffset: 1507.2;
  }
  75% {
    stroke-width: 20;
    stroke-dashoffset: 753.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 60;
    stroke-dasharray: 1513.48;
    stroke-dashoffset: 0;
    -webkit-transform: rotate(390deg);
    transform: rotate(390deg);
  }
}
@keyframes layer-4 {
  0% {
    stroke-dasharray: 1507.2;
    stroke-dashoffset: 1507.2;
  }
  75% {
    stroke-width: 20;
    stroke-dashoffset: 753.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 60;
    stroke-dasharray: 1513.48;
    stroke-dashoffset: 0;
    -moz-transform: rotate(390deg);
    -ms-transform: rotate(390deg);
    -webkit-transform: rotate(390deg);
    transform: rotate(390deg);
  }
}
.layer-5 > .path {
  stroke: rgba(234, 234, 234, 0.5);
  stroke-width: 30;
  stroke-dasharray: 1884;
  stroke-dashoffset: 1884;
  visibility: hidden;
  -moz-transform: rotate(-20deg);
  -ms-transform: rotate(-20deg);
  -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
}
.loaded .layer-5 > .path {
  visibility: visible;
  -moz-animation: layer-5 1.25s ease-in;
  -webkit-animation: layer-5 1.25s ease-in;
  animation: layer-5 1.25s ease-in;
}

@-moz-keyframes layer-5 {
  0% {
    stroke-dasharray: 1884;
    stroke-dashoffset: 1884;
  }
  75% {
    stroke-width: 30;
    stroke-dashoffset: 942;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 90;
    stroke-dasharray: 1890.28;
    stroke-dashoffset: 0;
    -moz-transform: rotate(460deg);
    transform: rotate(460deg);
  }
}
@-webkit-keyframes layer-5 {
  0% {
    stroke-dasharray: 1884;
    stroke-dashoffset: 1884;
  }
  75% {
    stroke-width: 30;
    stroke-dashoffset: 942;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 90;
    stroke-dasharray: 1890.28;
    stroke-dashoffset: 0;
    -webkit-transform: rotate(460deg);
    transform: rotate(460deg);
  }
}
@keyframes layer-5 {
  0% {
    stroke-dasharray: 1884;
    stroke-dashoffset: 1884;
  }
  75% {
    stroke-width: 30;
    stroke-dashoffset: 942;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 90;
    stroke-dasharray: 1890.28;
    stroke-dashoffset: 0;
    -moz-transform: rotate(460deg);
    -ms-transform: rotate(460deg);
    -webkit-transform: rotate(460deg);
    transform: rotate(460deg);
  }
}
.layer-6 > .path {
  stroke: rgba(234, 234, 234, 0.2);
  stroke-width: 45;
  stroke-dasharray: 2386.4;
  stroke-dashoffset: 2386.4;
  visibility: hidden;
  -moz-transform: rotate(-80deg);
  -ms-transform: rotate(-80deg);
  -webkit-transform: rotate(-80deg);
  transform: rotate(-80deg);
}
.loaded .layer-6 > .path {
  visibility: visible;
  -moz-animation: layer-6 1.25s ease-in;
  -webkit-animation: layer-6 1.25s ease-in;
  animation: layer-6 1.25s ease-in;
}

@-moz-keyframes layer-6 {
  0% {
    stroke-dasharray: 2386.4;
    stroke-dashoffset: 2386.4;
  }
  75% {
    stroke-width: 45;
    stroke-dashoffset: 1193.2;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 135;
    stroke-dasharray: 2392.68;
    stroke-dashoffset: 0;
    -moz-transform: rotate(400deg);
    transform: rotate(400deg);
  }
}
@-webkit-keyframes layer-6 {
  0% {
    stroke-dasharray: 2386.4;
    stroke-dashoffset: 2386.4;
  }
  75% {
    stroke-width: 45;
    stroke-dashoffset: 1193.2;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 135;
    stroke-dasharray: 2392.68;
    stroke-dashoffset: 0;
    -webkit-transform: rotate(400deg);
    transform: rotate(400deg);
  }
}
@keyframes layer-6 {
  0% {
    stroke-dasharray: 2386.4;
    stroke-dashoffset: 2386.4;
  }
  75% {
    stroke-width: 45;
    stroke-dashoffset: 1193.2;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 135;
    stroke-dasharray: 2392.68;
    stroke-dashoffset: 0;
    -moz-transform: rotate(400deg);
    -ms-transform: rotate(400deg);
    -webkit-transform: rotate(400deg);
    transform: rotate(400deg);
  }
}
.layer-7 > .path {
  stroke: #eaeaea;
  stroke-width: 75;
  stroke-dasharray: 2826;
  stroke-dashoffset: 2826;
  visibility: hidden;
  -moz-transform: rotate(-10deg);
  -ms-transform: rotate(-10deg);
  -webkit-transform: rotate(-10deg);
  transform: rotate(-10deg);
}
.loaded .layer-7 > .path {
  visibility: visible;
  -moz-animation: layer-7 1.25s ease-in;
  -webkit-animation: layer-7 1.25s ease-in;
  animation: layer-7 1.25s ease-in;
}

@-moz-keyframes layer-7 {
  0% {
    stroke-dasharray: 2826;
    stroke-dashoffset: 2826;
  }
  75% {
    stroke-width: 75;
    stroke-dashoffset: 1413;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 225;
    stroke-dasharray: 2832.28;
    stroke-dashoffset: 0;
    -moz-transform: rotate(470deg);
    transform: rotate(470deg);
  }
}
@-webkit-keyframes layer-7 {
  0% {
    stroke-dasharray: 2826;
    stroke-dashoffset: 2826;
  }
  75% {
    stroke-width: 75;
    stroke-dashoffset: 1413;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 225;
    stroke-dasharray: 2832.28;
    stroke-dashoffset: 0;
    -webkit-transform: rotate(470deg);
    transform: rotate(470deg);
  }
}
@keyframes layer-7 {
  0% {
    stroke-dasharray: 2826;
    stroke-dashoffset: 2826;
  }
  75% {
    stroke-width: 75;
    stroke-dashoffset: 1413;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 225;
    stroke-dasharray: 2832.28;
    stroke-dashoffset: 0;
    -moz-transform: rotate(470deg);
    -ms-transform: rotate(470deg);
    -webkit-transform: rotate(470deg);
    transform: rotate(470deg);
  }
}
.layer-8 > .path {
  stroke: rgba(234, 234, 234, 0.5);
  stroke-width: 250;
  stroke-dasharray: 3391.2;
  stroke-dashoffset: 3391.2;
  visibility: hidden;
  -moz-transform: rotate(-70deg);
  -ms-transform: rotate(-70deg);
  -webkit-transform: rotate(-70deg);
  transform: rotate(-70deg);
}
.loaded .layer-8 > .path {
  visibility: visible;
  -moz-animation: layer-8 1.25s ease-in;
  -webkit-animation: layer-8 1.25s ease-in;
  animation: layer-8 1.25s ease-in;
}

@-moz-keyframes layer-8 {
  0% {
    stroke-dasharray: 3391.2;
    stroke-dashoffset: 3391.2;
  }
  75% {
    stroke-width: 250;
    stroke-dashoffset: 1695.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 750;
    stroke-dasharray: 3397.48;
    stroke-dashoffset: 0;
    -moz-transform: rotate(410deg);
    transform: rotate(410deg);
  }
}
@-webkit-keyframes layer-8 {
  0% {
    stroke-dasharray: 3391.2;
    stroke-dashoffset: 3391.2;
  }
  75% {
    stroke-width: 250;
    stroke-dashoffset: 1695.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 750;
    stroke-dasharray: 3397.48;
    stroke-dashoffset: 0;
    -webkit-transform: rotate(410deg);
    transform: rotate(410deg);
  }
}
@keyframes layer-8 {
  0% {
    stroke-dasharray: 3391.2;
    stroke-dashoffset: 3391.2;
  }
  75% {
    stroke-width: 250;
    stroke-dashoffset: 1695.6;
  }
  100% {
    stroke: #eaeaea;
    stroke-width: 750;
    stroke-dasharray: 3397.48;
    stroke-dashoffset: 0;
    -moz-transform: rotate(410deg);
    -ms-transform: rotate(410deg);
    -webkit-transform: rotate(410deg);
    transform: rotate(410deg);
  }
}
.loader {
  position: absolute;
  width: 120px;
  height: 120px;
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1);
  z-index: 9999;
  overflow: visible;
}
.loaded .loader {
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -webkit-transform: scale(0);
  transform: scale(0);
  -moz-transition: all 2.25s ease-in-out 1.25s;
  -o-transition: all 2.25s ease-in-out 1.25s;
  -webkit-transition: all 2.25s ease-in-out;
  -webkit-transition-delay: 1.25s;
  transition: all 2.25s ease-in-out 1.25s;
}
.loader g, .loader circle {
  transform-origin: 50% 50%;
}

.core > .path {
  fill: #ff4444;
  visibility: hidden;
  -moz-transform: scale(1, 1);
  -ms-transform: scale(1, 1);
  -webkit-transform: scale(1, 1);
  transform: scale(1, 1);
  -moz-transition: all 0.625s ease-in-out 0.15625s;
  -o-transition: all 0.625s ease-in-out 0.15625s;
  -webkit-transition: all 0.625s ease-in-out;
  -webkit-transition-delay: 0.15625s;
  transition: all 0.625s ease-in-out 0.15625s;
}
.loaded .core > .path {
  -moz-animation: core-loaded 2.5s ease-in-out;
  -webkit-animation: core-loaded 2.5s ease-in-out;
  animation: core-loaded 2.5s ease-in-out;
}

@-moz-keyframes core-loaded {
  0% {
    visibility: hidden;
    -moz-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25%, 85% {
    opacity: 1;
    visibility: visible;
    -moz-transform: scale(1000, 1000);
    transform: scale(1000, 1000);
  }
  100% {
    opacity: 0;
    -moz-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}
@-webkit-keyframes core-loaded {
  0% {
    visibility: hidden;
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25%, 85% {
    opacity: 1;
    visibility: visible;
    -webkit-transform: scale(1000, 1000);
    transform: scale(1000, 1000);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}
@keyframes core-loaded {
  0% {
    visibility: hidden;
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25%, 85% {
    opacity: 1;
    visibility: visible;
    -moz-transform: scale(1000, 1000);
    -ms-transform: scale(1000, 1000);
    -webkit-transform: scale(1000, 1000);
    transform: scale(1000, 1000);
  }
  100% {
    opacity: 0;
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}
.spinner {
  opacity: 1;
  -moz-transition: opacity 0.1s 0.1s;
  -o-transition: opacity 0.1s 0.1s;
  -webkit-transition: opacity 0.1s;
  -webkit-transition-delay: 0.1s;
  transition: opacity 0.1s 0.1s;
  -moz-animation: rotate 1.25s linear infinite;
  -webkit-animation: rotate 1.25s linear infinite;
  animation: rotate 1.25s linear infinite;
}
.loaded .spinner {
  opacity: 0;
}
.spinner > .path {
  stroke: #EF836E;
  stroke-width: 6;
  stroke-dasharray: 157;
  stroke-dashoffset: 157;
  -moz-animation: spinner 1.25s both infinite ease-in-out;
  -webkit-animation: spinner 1.25s both infinite ease-in-out;
  animation: spinner 1.25s both infinite ease-in-out;
}

@-moz-keyframes rotate {
  0% {
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -moz-transform: rotate(270deg);
    transform: rotate(270deg);
  }
}
@-webkit-keyframes rotate {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(270deg);
    transform: rotate(270deg);
  }
}
@keyframes rotate {
  0% {
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -moz-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    transform: rotate(270deg);
  }
}
@-moz-keyframes spinner {
  0% {
    stroke-dasharray: 157;
    stroke-dashoffset: 157;
  }
  65% {
    stroke-dasharray: 157;
    stroke-dashoffset: 39.25;
    transform: rotate(135deg);
  }
  100% {
    stroke-dasharray: 157;
    stroke-dashoffset: 157;
    transform: rotate(450deg);
  }
}
@-webkit-keyframes spinner {
  0% {
    stroke-dasharray: 157;
    stroke-dashoffset: 157;
  }
  65% {
    stroke-dasharray: 157;
    stroke-dashoffset: 39.25;
    transform: rotate(135deg);
  }
  100% {
    stroke-dasharray: 157;
    stroke-dashoffset: 157;
    transform: rotate(450deg);
  }
}
@keyframes spinner {
  0% {
    stroke-dasharray: 157;
    stroke-dashoffset: 157;
  }
  65% {
    stroke-dasharray: 157;
    stroke-dashoffset: 39.25;
    transform: rotate(135deg);
  }
  100% {
    stroke-dasharray: 157;
    stroke-dashoffset: 157;
    transform: rotate(450deg);
  }
}




</style>
<style>
.container2 {
  position: fixed!important;
  overflow: visible;
  width: 100%; height: 100%;
  z-index: -3;
  background: #fff;
}

.center, .loader, .container2, .page, .btn:after, .ARS {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}

.loader, .core, .spinner, .path {
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
:root {
  --black: #21252a;
  --grey-1: #343A40;
  --grey-2: #495057;
  --grey-3: #868E96;
  --grey-4: #ADB5BD;
  --grey-5: #CED4DA;
  --grey-6: #DEE2E6;
  --grey-7: #E9ECEF;
  --grey-8: #F1F3F5;
  --grey-9: #F8F9FA;
  --trans-black: rgba(33, 37, 42, .9);
  --red: #e10600;
  --gold: #ffda65;
  --gold-dark: #a3862c;
  --bronze: #c99355;
  --bronze-dark: #80582c;
}


.list {
  width: 100%;
  margin: -1rem auto;
  display: none;
}
@media screen and (max-width: 800px) {
  .list {
    margin: 0 auto;
  }
}
.list__table {
  width: 100%;
  border-spacing: 0;
  color: var(--grey-3);
}
.list__header {
  padding: 3rem 2rem;
  background: white;
  border-top-left-radius: .4rem;
  border-top-right-radius: .4rem;
}
.list__header h1, .list__header h5 {
  margin: 0;
  padding: 0;
}
.list__header h5 {
  margin-bottom: .5rem;
  text-transform: uppercase;
  color: var(--red);
}
.list__value {
  display: block;
  font-size: 18px;
}
.list__label {
  font-size: 11px;
  opacity: .6;
}
.list__row {
  background: #;
  cursor: pointer;
  transition: all 300ms ease;
}
.list__row:hover, .list__row:focus {
  -webkit-transform: scale(1.05);
          transform: scale(1.05);
  box-shadow: 0px 15px 28px rgba(0, 0, 0, 0.1), 0px 5px 12px rgba(0, 0, 0, 0.08);
  transition: all 300ms ease;
}
.list__row:not(:last-of-type) .list__cell {
  box-shadow: 0px 2px 0px rgba(0, 0, 0, 0.08);
}
.list__row:first-of-type {
  color: var(--gold-dark);
  background:#fff;
}
.list__row:first-of-type .list__cell:first-of-type {
  background: var(--gold);
  color: var(--gold-dark);
}
.list__row:nth-of-type(2) {
  color: var(--grey-2);
  background: #fff;
}
.list__row:nth-of-type(2) .list__cell:first-of-type {
  background: var(--grey-4);
  color: var(--grey-2);
}
.list__row:nth-of-type(3) {
  color: var(--bronze-dark);
  background: var(--grey-9);
}
.list__row:nth-of-type(3) .list__cell:first-of-type {
  background: var(--bronze);
  color: var(--bronze-dark);
}
.list__cell {
  padding: 1rem;
}
.list__cell:first-of-type {
  text-align: center;
  padding: 1rem .2rem;
  background: var(--grey-5);
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: var(--trans-black);
  display: none;
  cursor: pointer;
  transition: all 300ms ease;
}
.overlay.is-open {
  display: block;
}

.sidebar {
  position: fixed;
  background: white;
  width: 100%;
  max-width: 500px;
  top: 0;
  bottom: 0;
  box-shadow: none;
  right: -500px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  /*@media screen and (max-width: 650px) {
  	flex-direction: column-reverse;
  	justify-content: space-between;
  }*/
  transition: all 300ms ease;
}
.sidebar.is-open {
  right: 0;
  transition: all 300ms ease;
  box-shadow: 0px 0px 100px var(--black);
}
.sidebar__header {
  display: flex;
  justify-content: space-between;
  background: var(--grey-9);
  align-items: center;
}
.sidebar__header, .sidebar__body {
  padding: 2rem;
}
.sidebar__title {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--grey-4);
}

.button {
  font-family: inherit;
  border: 0;
  background: transparent;
  cursor: pointer;
}
.button:focus, .button:active {
  outline: 0;
}
.button--close {
  padding: 0;
  margin: 0;
  height: auto;
  line-height: 1;
  color: var(--grey-5);
}
.button--close:hover {
  color: var(--grey--4);
}

.driver {
  display: flex;
  align-items: flex-start;
  opacity: 0;
  position: relative;
  left: 100px;
  -webkit-animation: fade 500ms ease 150ms forwards;
          animation: fade 500ms ease 150ms forwards;
}
.driver__image {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-size: 220px;
  background-repeat: no-repeat;
  background-position: top center;
  border: 3px solid white;
  box-shadow: 0px 5px 12px rgba(0, 0, 0, 0.12);
  margin-right: 1.5rem;
}
.driver__content {
  width: auto;
}
.driver__title {
  font-weight: 700;
  font-size: 1.6rem;
  margin: 0.5rem 0;
}
.driver__table {
  width: 100%;
  color: var(--grey-2);
}
.driver__table small {
  color: var(--grey-4);
}
.driver__table td {
  padding: .3rem .6rem .3rem 0;
  height: 2rem;
}
.driver__table td img {
  position: relative;
  top: 5px;
  margin-right: 6px;
}

@-webkit-keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
    left: 0;
  }
}

@keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
    left: 0;
  }
}

</style>
<style>
.ui-success,.ui-error {
	width: 100%; 
}
.ui-success-circle {
  stroke-dasharray: 260.75219025px, 260.75219025px;
  stroke-dashoffset: 260.75219025px;
  transform: rotate(220deg);
  transform-origin: center center;
  stroke-linecap: round;
}
.ui-success-path {
  stroke-dasharray: 60px 64px;
  stroke-dashoffset: 62px;
  stroke-linecap: round;
}

.success-circle-animation {
	  animation: ani-success-circle 1s ease-in both;

}
.success-path-animation {
	  animation: ani-success-path 0.4s 1s ease-in both;

}
@keyframes ani-success-circle {
  to {
    stroke-dashoffset: 782.25657074px;
  }
}
@keyframes ani-success-path {
  0% {
    stroke-dashoffset: 62px;
  }
  65% {
    stroke-dashoffset: -5px;
  }
  84% {
    stroke-dashoffset: 4px;
  }
  100% {
    stroke-dashoffset: -2px;
  }
}
.ui-error-circle {
  stroke-dasharray: 260.75219025px, 260.75219025px;
  stroke-dashoffset: 260.75219025px;
}
.ui-error-line1 {
  stroke-dasharray: 54px 55px;
  stroke-dashoffset: 55px;
  stroke-linecap: round;
}
.ui-error-line2 {
  stroke-dasharray: 54px 55px;
  stroke-dashoffset: 55px;
  stroke-linecap: round;
}

.error-circle-animation {  animation: ani-error-circle 1.2s linear;
}
.error-line1-animation {  animation: ani-error-line 0.15s 1.2s linear both;
}
.error-line2-animation {  animation: ani-error-line 0.2s 0.9s linear both;
}

@keyframes ani-error-line {
  to {
    stroke-dashoffset: 0;
  }
}
@keyframes ani-error-circle {
  0% {
    stroke-dasharray: 0, 260.75219025px;
    stroke-dashoffset: 0;
  }
  35% {
    stroke-dasharray: 120px, 120px;
    stroke-dashoffset: -120px;
  }
  70% {
    stroke-dasharray: 0, 260.75219025px;
    stroke-dashoffset: -260.75219025px;
  }
  100% {
    stroke-dasharray: 260.75219025px, 0;
    stroke-dashoffset: -260.75219025px;
  }
}

.check {
	position: fixed;
	height: 150px;
	bottom: 0;
	background: #fff;
	width: 100%;
	z-index: 1;
	display:none;
	
}
.startcheck {
	position: fixed;
	height: 150px;
	bottom: 0;
	background: #f2f2f2;
	width: 100%;
	z-index: 0;

	
}
.dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  font-size: 10px;
  font-weight: bold;
  padding-top:5px;
  color: #fff;
  display: inline-block;
}
.dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  font-size: 10px;
  font-weight: bold;
  padding-top:5px;
  color: #fff;
  display: inline-block;
}
.radio {
  position: relative;
  cursor: pointer;
  line-height: 20px;
  font-size: 14px;
  margin: 15px;
  margin-left:0;
}
.ans {
	font-size: 18px!important;
}
.radio .label {
  position: relative;
  display: block;
  float: left;
  margin-right: 10px;
  width: 20px;
  height: 20px;
  font-size: 16px;
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
.cntr {
  position: absolute;
  top: calc(50% - 10px);
  left: 0;
  width: 100%;
  text-align: center;
}
.hidden {
  display: none;
}
.credit {
  position: fixed;
  right: 20px;
  bottom: 20px;
  transition: all 0.2s ease;
  -webkit-user-select: none;
  user-select: none;
  opacity: 0.6;
}
.credit img {
  width: 72px;
}
.credit:hover {
  transform: scale(0.95);
}


.content {
	background-color: #fff;
	width: 100%;
  display: flex;
  justify-content: center;
}

#quiz {
    display:none;
	margin-top: 50px;
}

ul {
    list-style-type: none;
    padding: 0;
    margin-bottom: 10px;
}

input[type="radio"] {
	margin-right: 15px;
}
button {
	position: relative;
    float:right;
	margin-left: 5px;
	margin-top: 15px;
}

#prev {
    display:none;
}

#start {
    display:none;
    width: 90px;
}

#warning {
	color: #800000;
	font-weight: bold;
	margin-top: 25px;
}
.form-wizard-steps {
  margin: 30px 0;
}
.form-wizard-steps li {
  width: 5%;
  float: left;
  font-size: 10px;
  position: relative;
}
.form-wizard-steps li::after {
  background-color: #f3f3f3;
  content: "";
  height: 5px;
  left: 0;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  border-bottom: 1px solid #dddddd;
  border-top: 1px solid #dddddd;
}
.form-wizard-steps li span {
  background-color: #dddddd;
  border-radius: 50%;
  display: inline-block;
  height: 25px;
  line-height: 25px;
  position: relative;
  text-align: center;
  width: 25px;
  z-index: 1;
}
.form-wizard-steps li:last-child::after {
  width: 50%;
}
.form-wizard-steps li.active span, .form-wizard-steps li.activated span {
  background-color: #d65470;
  color: #ffffff;
}
.form-wizard-steps li.active::after, .form-wizard-steps li.activated::after {
  background-color: #d65470;
  left: 50%;
  width: 50%;
  border-color: #d65470;
}
.form-wizard-steps li.activated::after {
  width: 100%;
  border-color: #d65470;
}
.form-wizard-steps li:last-child::after {
  left: 0;
}

@media(max-width: 767px){
	#start {
		margin-left: 25px;
	}
}

/*========================
    BUTTON styles
  =======================*/
.clap {
  position: relative;
  outline: 1px solid transparent;
  border-radius: 50%;
  border: 1px solid #bdc3c7;
  width: 40px;
  height: 40px;
  background: none;
  float: left;
  margin-top: 30px;
}
.clap:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  border-radius: 50%;
  width: 39px;
  height: 39px;
  opacity: 0;
}
.clap:hover {
  cursor: pointer;
  border: 1px solid #27ae60;
  transition: border-color 0.3s ease-in;
}
.clap:hover:after {
  animation: shockwave 1s ease-in infinite;
}
.clap svg {
  width: 25px;
  fill: none;
  stroke: #27ae60;
  stroke-width: 2px;
}
.clap svg.checked {
  fill: #27ae60;
  stroke: #fff;
  stroke-width: 1px;
}
.clap .clap--count {
  position: absolute;
  top: -25px;
  left: 10px;
  font-size: 0.8rem;
  color: white;
  display: none;
  background: #27ae60;
  
  border-radius: 50%;
  height: 30px;
  width: 30px;
  line-height: 15px;
}
.clap .clap--count-total {
  position: absolute;
  font-size: 0.8rem;
  width: 40px;
  text-align: center;
  left: 0;
  top: -22.8571428571px;
  color: #bdc3c7;
}
@keyframes shockwave {
  0% {
    transform: scale(1);
    box-shadow: 0 0 2px #27ae60;
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 0;
    box-shadow: 0 0 25px #145b32, inset 0 0 10px #27ae60;
  }
}

</style>
<style>
.circle-chart__circle {
  animation: circle-chart-fill 2s reverse; /* 1 */ 
  transform: rotate(-90deg); /* 2, 3 */
  transform-origin: center; /* 4 */
}

/**
 * 1. Rotate by -90 degree to make the starting point of the
 *    stroke the top of the circle.
 * 2. Scaling mirrors the circle to make the stroke move right
 *    to mark a positive chart value.
 * 3. Using CSS transforms on SVG elements is not supported by Internet Explorer
 *    and Edge, use the transform attribute directly on the SVG element as a
 * .  workaround (https://markus.oberlehner.net/blog/pure-css-animated-svg-circle-chart/#part-4-internet-explorer-strikes-back).
 */
.circle-chart__circle--negative {
  transform: rotate(-90deg) scale(1,-1); /* 1, 2, 3 */
}

.circle-chart__info {
  animation: circle-chart-appear 2s forwards;
  opacity: 0;
  transform: translateY(0.3em);
}

@keyframes circle-chart-fill {
  to { stroke-dasharray: 0 100; }
}

@keyframes circle-chart-appear {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Layout styles only, not needed for functionality */


.grid {
  display: grid;
  grid-column-gap: 1em;
  grid-row-gap: 1em;
  grid-template-columns: repeat(1, 1fr);
}

@media (min-width: 31em) {
  .grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
</style>
<style>
.books {
  perspective: 500px;
  position: relative;
  z-index: 2;
  display: inline-block;
  margin: 3%;
  margin-left: 9%;
  margin-right: -5%;
  width: 100%;
  height: auto;
  box-shadow: 15px 5px 1px rgba(0, 0, 0, 0.4);
  transform-origin: 0 0;
  transform-style: preserve-3d;
  transform: rotateY(0);
  transition: all 500ms;
}
.books:after {
  content: "";
  position: absolute;
  display: block;
  top: 0px;
  right: -6px;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAG0lEQVQIW2P8/////w8fPjAICAgwwGhGGggCAOYAMfLhHG5wAAAAAElFTkSuQmCC) repeat;
  width: 4px;
  height: 98%;
  transform: rotateY(35deg);
  transform-origin: right;
  transition: all 500ms;
  right: -10px;
  width: 15px;
}
.books:hover {
  box-shadow: 20px 10px 50px rgba(0, 0, 0, 0.4);
  transform: rotateY(-20deg);
}
.books img {
  max-width: 100%;
  padding-top: 0px;
  width: auto;
  height: auto;
  display: inline-block;
  margin-left: 0;
}

</style>

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body class="animated fadeIn" data-spy="scroll" data-target="#toc">

<div class="container2">
  <svg class="loader" viewBox="0 0 100 100" overflow="visible">
    <g class="core">
      <circle class="path" cx="50" cy="50" r="1" fill="none" />
    </g>
    <g class="spinner">
      <circle class="path" cx="50" cy="50" r="20" fill="none" />
    </g>
    <g class="layer-1">
      <circle class="path" cx="50" cy="50" r="70" fill="none" />
    </g>
    <g class="layer-2">
      <circle class="path" cx="50" cy="50" r="120" fill="none" />
    </g>
    <g class="layer-3">
      <circle class="path" cx="50" cy="50" r="180" fill="none" />
    </g>
    <g class="layer-4">
      <circle class="path" cx="50" cy="50" r="240" fill="none" />
    </g>
    <g class="layer-5">
      <circle class="path" cx="50" cy="50" r="300" fill="none" />
    </g>
    <g class="layer-6">
      <circle class="path" cx="50" cy="50" r="380" fill="none" />
    </g>
    <g class="layer-7">
      <circle class="path" cx="50" cy="50" r="450" fill="none" />
    </g>
    <g class="layer-8">
      <circle class="path" cx="50" cy="50" r="540" fill="none" />
    </g>
  </svg>
</div>
  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->


<audio id="ding">
  <source src="../sounds/good.mp3" type="audio/mpeg">
</audio>
<audio id="results">
  <source src="../sounds/results.mp3" type="audio/mpeg">
</audio>
<audio id="wrong">
  <source src="../sounds/false.mp3" type="audio/mpeg">
</audio>
<audio id="applause">
  <source src="../sounds/applause.mp3" type="audio/mpeg">
</audio>
  <!--==========================
  Header
  ============================-->

<div class="container" style="padding-top: 20px;">


          <div class="row toprow text" style="text-align: right;">
<div class="col-6">
<button id="clap" class="clap">
  <span>
    <!--  SVG Created by Luis Durazo from the Noun Project  -->
   <i class="fab fa-canadian-maple-leaf text-danger"></i>
  </span>
  <span id="clap--count" class="clap--count"></span>
  <span id="clap--count-total" class="clap--count-total"></span>
</button>
</div>
<div class="col-6">           
		  <a href="/home" class="text-right btn btn-rounded btn-sm btn-danger btn-flat text-light" style="margin-top: 37px;margin-bottom: 20px;">Exit <i class="fas fa-external-link-alt"></i></a>

          </div>
		  </div>
		 <div class="progress" style="background: #fff;">
  <div class="progress-bar animated"  role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<?php if(Auth::user()->user_type == 'free'){ ?>
<div class="row">
<div class="col-12">

  <!--Section: Content-->
  <section class="text-center white-text d-md-flex justify-content-between p-2 red lighten-2 rounded my-3">

    <h6 class="font-weight-bold  p-3 text-red">Your Trial Version uses 80 questions over and over. Upgrade free for 700+ more.</h6>
    
    <a href="/upgrade" class="btn btn-white btn-rounded">Upgrade Free</a>

  </section>
  <!--Section: Content-->

</div>
</div>
<?php } ?>
<h1 class="text-center my-2 py-3 animated fadeIn" style="font-family: lobster">Select your test type</h1>

 
 <div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
 <div class="card-deck">
<div class="card animated fadeIn" style="border: 5px solid #ececec;border-radius: 15px;">
     <div class="card-body text-center">
	 			<i class="fas fa-bolt fa-3x text-danger"></i>

            <div class="step-number text-center">
              <h3 class="number b-red">Zip Test</h3>
            </div>
            <div class="step-excerpt text-center" style="margin-top: 15px;">
              <p class="text-muted">A <b>10 Question</b> Quick Test with corrections directly built into the quiz.</p>
            </div>
			<a class="btn btn-lg btn-danger" style="color: #fff;" href="/practice-test-with-answers?number=10&test=3&test_type=2">Begin Zip Test</a>
         </div>
		 </div>
		 <div class="card card-button animated fadeIn" style="">
		 <div class="card-body text-center">
          <i class="fas fa-clock fa-3x text-danger"></i>

            <div class="step-number text-center">
              <h3 class="number b-red">Full Simulation</h3>
            </div>
            <div class="step-excerpt text-center" style="margin-top: 15px;">
              <p class="text-muted">The <b>full 20 Question Timed</b> Test. Must be completed within 30 minutes.</p>
            </div>
						<a class="btn btn-lg btn-danger" style="color: #fff;" href="/timed-test?number=20&test=4&test_type=2">Begin Simulation</a>

          </div>
		  </div>
		  </div>
		  <div class="col-lg-2"></div>
      </div>
  
  
 </div>
  <!-- Copyright -->
 
  <!-- Copyright -->

</footer>
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

</body>
</html>
