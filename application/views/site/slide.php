<script src="<?php echo public_url()?>/site/royalslider/jquery.royalslider.min.js"></script>
<link type="text/css" href="<?php echo public_url()?>/site/royalslider/royalslider.css" rel="stylesheet">
<link type="text/css" href="<?php echo public_url()?>/site/royalslider/skins/minimal-white/rs-minimal-white.css" rel="stylesheet">


<script type="text/javascript">
(function($)
{
	$(document).ready(function()
	{
		$("#HomeSlide").royalSlider({
			arrowsNav:true,
			loop:false,
			keyboardNavEnabled:true,
			controlsInside:false,
			imageScaleMode:"fill",
			arrowsNavAutoHide:false,
			autoScaleSlider:true,
			autoScaleSliderWidth:580,//chiều rộng slide
			autoScaleSliderHeight:205,//chiều cao slide
			controlNavigation:"bullets",
			thumbsFitInViewport:false,
			navigateByClick:true,
			startSlideId:0,
			autoPlay:{enabled:true, stopAtAction:false, pauseOnHover:true, delay:5000},
			transitionType:"move",
			slideshowEnabled:true,
			slideshowDelay:5000,
			slideshowPauseOnHover:true,
			slideshowAutoStart:true,
			globalCaption:false
		});
	});
})(jQuery);
</script>


<style>
#HomeSlide.royalSlider {
	width: 580px;	
	height: 205px;
    overflow:hidden;
}
</style>

<div id='slide'>
	<div id="img-slide" class="sliderContainer" style='width:580px'>
		<div id="HomeSlide" class="royalSlider rsMinW">
		      		      <a href="http://dantri.com.vn/" target='_blank'><img src="<?php echo base_url() ?>/upload/slide/31.jpg" /> </a>
		      		      <a href="http://dantri.com.vn/" target='_blank'><img src="<?php echo base_url() ?>/upload/slide/21.jpg" /> </a>
		      		      <a href="http://dantri.com.vn/" target='_blank'><img src="<?php echo base_url() ?>/upload/slide/11.jpg" /> </a>
		      		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="clear pb20"></div>  