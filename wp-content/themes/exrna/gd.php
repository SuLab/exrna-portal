<?php
/*
Template Name: gd video w/ Title
*/
 
get_header() ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/bower_components/jquery/jquery.min.js"><\/script>')</script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/bower_components/jquery-ui/ui/jquery-ui.js"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="http://vjs.zencdn.net/4.0/video.js"></script>

<h1>tests</h1>
<!-- Button to Pause BigVideo.js -->


<!-- BigVideo Dependencies -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script src="http://vjs.zencdn.net/4.0/video.js"></script>

    <!-- BigVideo -->
    <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bgvidjs/lib/bigvideo.js"></script>


    <!-- Video Load -->
	 <script>
			var BV;
	    	$(function() {
         
			// initialize BigVideo
			BV = new $.BigVideo();
			BV.init();
			BV.show('http://localhost:8888/exrnawp/wp-content/themes/exrna/bigvid/vids/exrnahd.mp4',{ambient:true});
	    });
    </script>
	<button id="fuckmodal" onclick='BV.getPlayer().pause();' style="z-index:9999">Pause me</button>
	<button id="fuckbutton" onclick='BV.getPlayer().play();' style="z-index:9999">
		<i class="stopbgvid fa fa-pause"></i>
	</button>
		</div>
    </div>
    <script>
    	$('#fuckmodal').on('click', function(e) {
	      $('.fa-pause').removeClass('fa-pause').addClass('fa-play'); //you can list several class names 
	      e.preventDefault();
	    });
	    $('.stopbgvid').on('click', function(e) {
	      $('.stopbgvid').toggleClass('fa-play').toggleClass('fa-pause'); //you can list several class names 
	      e.preventDefault();
	    });
	    $('#fuckbutton').on('click', function(e) {
	     	$("#fuckbutton").toggle(myFirstHandlerFunction, mySecondHandlerFunction);
	     	e.preventDefault();
	     });
    </script>
<?php get_footer() ?>

