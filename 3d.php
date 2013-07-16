<?php include("inc/header.php") ?>
<div class="wrapper">
    <img class="page-h" src="images/3d-model-h.png" alt="3D Model">
    <div class="banner"><a class="open-3d-popup" href="3d-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/01.jpg" alt=""></a></div>
    <div class="box-section">
        <div class="box two-col"><a class="open-3d-popup" href="3d-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/02.jpg" alt=""></a></div>
        <div class="box two-col"><a class="open-3d-popup" href="3d-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/03.jpg" alt=""></a></div>
        <div class="box two-col"><a class="open-3d-popup" href="3d-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/04.jpg" alt=""></a></div>
        <div class="box one-col"><a class="open-3d-popup" href="3d-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/05.jpg" alt=""></a></div>
        <div class="box one-col"><a class="open-3d-popup" href="3d-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/06.jpg" alt=""></a></div>
        <div class="box two-col"><a class="open-3d-popup" href="3d-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/07.jpg" alt=""></a></div>
        <div class="box two-col"><a class="open-3d-popup" href="3d-detail.php"><img class="lazyload" src="images/grey.gif" data-original="images/08.jpg" alt=""></a></div>
        <div class="clearfix"></div>
    </div>
    <div class="btn-view-more"><img src="images/btn-view-more.jpg" alt=""></div>

</div> <!-- /container -->
<?php include("inc/footer.php") ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#menu ul li').eq(3).find("a").addClass("active");

        $('.open-3d-popup').fancybox({
            'showCloseButton'       : true,
            'width'                 : 951,
            'height'                : 'auto',
            'padding'               : 0,
            'margin'                : 0,
            'autoDimensions'        : false,
            'autoScale'             : false,
            'centerOnScroll'        : false,
            'overlayOpacity'        : 0,
            'onComplete'            : function(){
                $("#fancybox-close").css("background-position","0 -21px");
            }
        });
    });
</script>