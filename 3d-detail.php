
<div class="wrapper detail-3d">
	<div class="box-section">
<!-- 		<div class="model-viewer">
			load image from jquery
		</div> -->

    <div class="model-viewer">
      <!--<span></span>-->
      <img src="images/3d/test/1.jpg" alt="">
      <!-- load image from jquery -->
    </div>
		<div class="four-col">
			<div class="box two-col"><img src="images/3d-model.jpg" alt=""></div>
			<div class="box two-col"><img src="images/3d-model.jpg" alt=""></div>
			<div class="box two-col"><img src="images/3d-model.jpg" alt=""></div>
			<div class="box two-col"><img src="images/3d-model.jpg" alt=""></div>
			<div class="clearfix"></div>
		</div>
		<div class="two-col">
			<div class="box two-col">
				<div class="grey-inner">
					<p>A Group of Experienced &amp; talented Architects / Interior designers / 3D Visualizers was founded in June 2012 in order to built up the team to support rapidly growing designs &amp; 3D rendering market in Thailand and South east Asia region our target is to be one of leader in the market.</p>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div> <!-- /container -->
<!-- 360 degree product - spitespin -->
<script src="assets/js/jquery.spritespin.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
      /*
    	var frames = [
          "images/3d/rad_zoom_001.jpg",
          "images/3d/rad_zoom_002.jpg",
          "images/3d/rad_zoom_003.jpg",
          "images/3d/rad_zoom_004.jpg",
          "images/3d/rad_zoom_005.jpg",
          "images/3d/rad_zoom_006.jpg",
          "images/3d/rad_zoom_007.jpg",
          "images/3d/rad_zoom_008.jpg",
          "images/3d/rad_zoom_009.jpg",
          "images/3d/rad_zoom_010.jpg",
          "images/3d/rad_zoom_011.jpg",
          "images/3d/rad_zoom_012.jpg",
          "images/3d/rad_zoom_013.jpg",
          "images/3d/rad_zoom_014.jpg",
          "images/3d/rad_zoom_015.jpg",
          "images/3d/rad_zoom_016.jpg",
          "images/3d/rad_zoom_017.jpg",
          "images/3d/rad_zoom_018.jpg",
          "images/3d/rad_zoom_019.jpg",
          "images/3d/rad_zoom_020.jpg",
          "images/3d/rad_zoom_021.jpg",
          "images/3d/rad_zoom_022.jpg",
          "images/3d/rad_zoom_023.jpg",
          "images/3d/rad_zoom_024.jpg",
          "images/3d/rad_zoom_025.jpg",
          "images/3d/rad_zoom_026.jpg",
          "images/3d/rad_zoom_027.jpg",
          "images/3d/rad_zoom_028.jpg",
          "images/3d/rad_zoom_029.jpg",
          "images/3d/rad_zoom_030.jpg",
          "images/3d/rad_zoom_031.jpg",
          "images/3d/rad_zoom_032.jpg",
          "images/3d/rad_zoom_033.jpg",
          "images/3d/rad_zoom_034.jpg"
        ];

      $(".model-viewer").spritespin({
        width     : 480,
        height    : 327,
        frames    : frames.length,
        behavior  : "drag", // "hold"
        module    : "360",
        sense     : -1,
        source    : frames,
        animate   : false,
        loop      : true,
        frameWrap : true,
        frameStep : 1,
        frameTime : 60,
        enableCanvas : true
      });
      */
      $('.model-viewer').mousemove(function(e){
        //$(this).find('span').html('mousepos = '+ e.pageX +', '+ e.pageY);
        pageX = e.pageX;
        offsetLeft = $(this).offset().left;
        MouseRelXpos = (pageX - offsetLeft);
        MouseRelXpos = Math.round(MouseRelXpos / 32);
        if(MouseRelXpos == 0) {
          MouseRelXpos = 1;
        }
        bgNum = MouseRelXpos;
        //$(this).find('span').html('mousepos = '+MouseRelXpos+'<br/>e.pageX ='+pageX+'<br/>offsetLeft ='+offsetLeft);
        $(this).find('img').attr('src','images/3d/test/'+bgNum+'.jpg');
      });
    });
</script>

