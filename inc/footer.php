<a href="#" class="scroll-top"></a>
<footer class="footer">
    <div class="wrapper">
        <p>© 2013 WORK ACTUALLY CO.,LTD.  All Rights Reserved.</p>
    </div>
</footer>
</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.8.3.min.js"></script>
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
    
    <!-- Transit JS -->
    <script src="assets/js/jquery.transit.min.js"></script>
    <!-- Fancybox -->
    <script src="assets/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox-1.3.4.css"/>
    <!-- Lazy Load -->
    <script src="assets/js/jquery-lazyload.js"></script>
    
    
    <style>
        #fancybox-wrap { top: 129px!important; }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            $('.intro-logo').transition({ opacity:1,scale:1,easing:"easeOutCubic",duration:800,delay:500 });
            $('.intro .inner-intro').transition({ 
                scale:0.7,
                opacity:0,
                easing:"easeOutCubic",
                duration:700,
                delay:2200,
                complete: function() { 
                    $('.intro').transition({ opacity:0,duration:300 });
                    $('.intro').hide();
                }
            });
            */
            
            $('#menu ul li a').hover(function(){
                if($(this).hasClass("active")) {
                    // Do Nothing
                }
                else {
                    $(this).stop(true).transition({ top:'15px',easing:"easeOutCubic",duration:300 });
                }
            },function(){
                if($(this).hasClass("active")) {
                    // Do Nothing
                }
                else {
                    $(this).stop(true).transition({ top:'0px',easing:"easeOutCubic",duration:300 });
                }
            });

            // Popup
            $('.open-content-popup').fancybox({
                'showCloseButton'       : true,
                'width'                 : 960,
                'height'                : 'auto',
                'padding'               : 0,
                'margin'                : 0,
                'autoDimensions'        : false,
                'autoScale'             : false,
                'centerOnScroll'        : false,
                'overlayOpacity'        : 0
            });

            // Lazy Load
            $('img.lazyload').lazyload({
                effect       : "fadeIn"
            });

            // Scroll to top
            $(".scroll-top").hide();
            $(function() {
                $(window).scroll(function() {
                    if($(this).scrollTop() > 100) {
                        $(".scroll-top").fadeIn();
                    }
                    else {
                        $(".scroll-top").fadeOut();
                    }
                });
                
                $(".scroll-top").click(function(){
                    $('html, body').animate({scrollTop:0}, 'slow');
                    return false;
                });
            });

            // Append
            var objAppend = '<div class="box two-col"><a class="open-content-popup" href="architect-detail.php"><img  class="lazyload" src="images/grey.gif" data-original="images/02.jpg" alt=""></a></div><div class="box two-col"><a class="open-content-popup" href="architect-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/03.jpg" alt=""></a></div><div class="box two-col"><a class="open-content-popup" href="architect-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/04.jpg" alt=""></a></div><div class="box one-col"><a class="open-content-popup" href="architect-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/05.jpg" alt=""></a></div><div class="box one-col"><a class="open-content-popup" href="architect-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/06.jpg" alt=""></a></div><div class="box two-col"><a class="open-content-popup" href="architect-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/07.jpg" alt=""></a></div><div class="box two-col"><a class="open-content-popup" href="architect-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/08.jpg" alt=""></a></div><div class="clearfix"></div>';
            $(".btn-view-more").on("click",function(){
                $(".banner img,.box-section .box img").removeClass("lazyload");
                $(".box-section").append(objAppend);
                $('img.lazyload').lazyload({
                    effect       : "fadeIn"
                });
            });

        });
    </script>

  </body>
</html>
