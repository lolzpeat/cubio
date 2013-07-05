<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cubio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <!--<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
    <div class="intro">
        <div class="inner-intro">
            <img class="intro-logo" src="images/logo.jpg" alt="">
        </div>
    </div>
    <div class="menu">
        <div class="wrapper">
            <nav id="menu">
                <ul>
                    <li><a class="active" href="#">Architecture</a></li>
                    <li><a href="#">Interior</a></li>
                    <li><a href="#">Landscape</a></li>
                    <li><a href="#">3d</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <img class="logo" src="images/logo.jpg" alt="">
        </div>
    </div>
	<div class="wrapper">
		<div class="banner"><img src="images/01.jpg" alt=""></div>
		<div class="box-section">
			<div class="box two-col"><img src="images/02.jpg" alt=""></div>
			<div class="box two-col"><img src="images/03.jpg" alt=""></div>
			<div class="box two-col"><img src="images/04.jpg" alt=""></div>
			<div class="box one-col"><img src="images/05.jpg" alt=""></div>
			<div class="box one-col"><img src="images/06.jpg" alt=""></div>
			<div class="box two-col"><img src="images/07.jpg" alt=""></div>
			<div class="box two-col"><img src="images/08.jpg" alt=""></div>
            <div class="box one-col"><img src="images/06.jpg" alt=""></div>
            <div class="box two-col"><img src="images/07.jpg" alt=""></div>
            <div class="clearfix"></div>
		</div>
        <div class="btn-view-more"><img src="images/btn-view-more.jpg" alt=""></div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

    <script src="assets/js/jquery.transit.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.intro-logo').transition({ opacity:1,scale:1,easing:"easeOutCubic",duration:800,delay:500 });
            $('.intro .inner-intro').transition({ 
                scale:0.7,
                opacity:0,
                easing:"easeOutCubic",
                duration:700,
                delay:2200,
                complete: function() { 
                    $('.intro').transition({ opacity:0,duration:300 }); 
                }
            });
            
            $('#menu ul li').hover(function(){
                $(this).find('a').stop(true).transition({ top:'15px',easing:"easeOutCubic",duration:400 });
            },function(){
                $(this).find('a').stop(true).transition({ top:'0',easing:"easeOutCubic",duration:400 });
            });

        });
    </script>

  </body>
</html>
