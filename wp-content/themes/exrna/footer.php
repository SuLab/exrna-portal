<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			<!--</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		<!--</div><!-- close .row -->
	<!--</div><!-- close .container -->
<!--</div><!-- close .main-content -->
			

<footer>
	<div id="footy">
			<div class="container">
				<div class="row pushtop">
					<div class="col-md-1 col-sm-2 col-md-offset-1 ft-nav">
						<?php dynamic_sidebar( 'footer_1' ); ?>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-3 col-sm-3">
						<?php dynamic_sidebar( 'footer_2' ); ?>
					</div>
					<div class="col-md-2 col-sm-3">
						<?php dynamic_sidebar( 'footer_3' ); ?>
					</div>
					<div class="col-md-2 col-sm-3">
						<?php dynamic_sidebar( 'footer_4' ); ?>
					</div>
					<div class="col-md-2 col-sm-1">
						<a href="<?php bloginfo( 'url' ) ?>/"><img src="<?php bloginfo( 'url' ) ?>/media/exrna-logo-only-black.svg" alt="exRNA" style="max-width:105px;" class="logo img-responsive" onerror="this.onerror=null; this.src='<?php echo esc_url( home_url( '/' ) ); ?>media/exrna-logo-only-black.png'"></a>
					</div>
				</div>
			</div>
	</div>
</footer>


<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
<script>
$('.dropdown-toggle').addClass('disabled');
/**
 * Project: Bootstrap Hover Dropdown
 * Author: Cameron Spear
 * Contributors: Mattia Larentis
 *
 * Dependencies: Bootstrap's Dropdown plugin, jQuery
 *
 * A simple plugin to enable Bootstrap dropdowns to active on hover and provide a nice user experience.
 *
 * License: MIT
 *
 * http://cameronspear.com/blog/bootstrap-dropdown-on-hover-plugin/
 */
;(function ($, window, undefined) {
    // outside the scope of the jQuery plugin to
    // keep track of all dropdowns
    var $allDropdowns = $();

    // if instantlyCloseOthers is true, then it will instantly
    // shut other nav items when a new one is hovered over
    $.fn.dropdownHover = function (options) {
        // don't do anything if touch is supported
        // (plugin causes some issues on mobile)
        if('ontouchstart' in document) return this; // don't want to affect chaining

        // the element we really care about
        // is the dropdown-toggle's parent
        $allDropdowns = $allDropdowns.add(this.parent());

        return this.each(function () {
            var $this = $(this),
                $parent = $this.parent(),
                defaults = {
                    delay: 500,
                    instantlyCloseOthers: true
                },
                data = {
                    delay: $(this).data('delay'),
                    instantlyCloseOthers: $(this).data('close-others')
                },
                showEvent   = 'show.bs.dropdown',
                hideEvent   = 'hide.bs.dropdown',
                // shownEvent  = 'shown.bs.dropdown',
                // hiddenEvent = 'hidden.bs.dropdown',
                settings = $.extend(true, {}, defaults, options, data),
                timeout;

            $parent.hover(function (event) {
                // so a neighbor can't open the dropdown
                if(!$parent.hasClass('open') && !$this.is(event.target)) {
                    // stop this event, stop executing any code 
                    // in this callback but continue to propagate
                    return true; 
                }

                if(settings.instantlyCloseOthers === true)
                    $allDropdowns.removeClass('open');

                window.clearTimeout(timeout);
                $parent.addClass('open');
                $this.trigger(showEvent);
            }, function () {
                timeout = window.setTimeout(function () {
                    $parent.removeClass('open');
                    $this.trigger(hideEvent);
                }, settings.delay);
            });

            // this helps with button groups!
            $this.hover(function () {
                if(settings.instantlyCloseOthers === true)
                    $allDropdowns.removeClass('open');

                window.clearTimeout(timeout);
                $parent.addClass('open');
                $this.trigger(showEvent);
            });

            // handle submenus
            $parent.find('.dropdown-submenu').each(function (){
                var $this = $(this);
                var subTimeout;
                $this.hover(function () {
                    window.clearTimeout(subTimeout);
                    $this.children('.dropdown-menu').show();
                    // always close submenu siblings instantly
                    $this.siblings().children('.dropdown-menu').hide();
                }, function () {
                    var $submenu = $this.children('.dropdown-menu');
                    subTimeout = window.setTimeout(function () {
                        $submenu.hide();
                    }, settings.delay);
                });
            });
        });
    };

    $(document).ready(function () {
        // apply dropdownHover to all elements with the data-hover="dropdown" attribute
        $('[data-hover="dropdown"]').dropdownHover();
    });
})(jQuery, this);
	//if (matchMedia('only screen and (min-width: 768px)').matches) {
	//	$(function(){
	//	  $('.nav .dropdown .dropdown-toggle').bind('mousedown', function(){
	//	  var href = $(this).attr('href');
	//	  location.href = href;
	//	 });
	//	});
	//}
</script>
</body>
</html>