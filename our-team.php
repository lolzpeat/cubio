<?php include("inc/header.php") ?>
<div class="wrapper our-team-page">
	<img class="page-h" src="images/our-team-h.png" alt="Architecture">
	<div class="banner">
		<img src="images/our-team.jpg" alt="">
	</div>
	<div class="box-section">
		<?php for($i=0;$i<7;$i++) { ?>
			<div class="box one-col">
				<a class="open-team-detail" href="team-detail.php">
					<img src="images/team-member.jpg" alt="">
				</a>
			</div>
		<?php } ?>
		<div class="clearfix"></div>
	</div>
</div> <!-- /container -->
<style>
	#fancybox-content > div { overflow: hidden!important; }
</style>
<?php include("inc/footer.php") ?>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#menu ul li').eq(5).find("a").addClass("active");
       	$('.open-team-detail').fancybox({
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
	});
</script>