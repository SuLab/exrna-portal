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
			BV.show("<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/vids/exrnahd.mp4",{ambient:true});
	    });
    </script>
	<button id="elmodal"  style="z-index:9999">Pause me</button>
	<button id="theButton" class="playing" style="z-index:9999">
		<i class="stopbgvid fa fa-pause"></i>
	</button>
		</div>
    </div>
    <script>
    	$('#elmodal').on('click', function(e) {
	      $('.fa-pause').removeClass('fa-pause').addClass('fa-play');
	      $('#theButton').removeClass('playing');
	      BV.getPlayer().pause();
	      e.preventDefault();
	    });

    	$('.stopbgvid').on('click', function(e) {
	      $('.stopbgvid').toggleClass('fa-play').toggleClass('fa-pause'); 
	      e.preventDefault();
	    });
	    
	    

	    $("#theButton").on('click', function(e) {
		    if($(this).hasClass('playing')) {
		        BV.getPlayer().pause();
		        e.preventDefault();   
		    } else {
		        BV.getPlayer().play();
		        e.preventDefault();
		    }
		    $(this).toggleClass('playing')
		})

	    
    </script>
<?php get_footer() ?>

