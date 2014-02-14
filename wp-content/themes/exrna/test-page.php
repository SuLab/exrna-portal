<?php
/*
Template Name: test new
*/
?>

<?php get_header(); ?>
<div class="container resources pushtop">
	<h1>Resources</h1>
	<div class="row">
		<div class="col-md-8">		
			<div class="row pushtop">
					<div class="col-md-3">
						
							<img src="<?php bloginfo( 'url' ); ?>/media/protocols.png" alt="Protocols" class="grey center-block img-circle center-block resource-left">
						
					</div>
					<div class="col-md-8">
						<h3>Protocols</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
						<p class="soon">coming soon</p>
					</div>
			</div>
			<div class="row pushtop">
					<div class="col-md-3">
						
							<img src="<?php bloginfo( 'url' ); ?>/media/data.png" alt="Data" class="grey img-circle center-block resource-left">
						
					</div>
					<div class="col-md-8">
						<h3>Data</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
						<p class="soon">coming soon</p>
					</div>
			</div>
			<div class="row pushtop">
					<div class="col-md-3">
						
							<img src="<?php bloginfo( 'url' ); ?>/media/standards.png" alt="Standards" class="grey img-circle center-block resource-left">
						
					</div>
					<div class="col-md-8">
						<h3>Standards</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
						<p class="soon">coming soon</p>
					</div>
			</div>
			<div class="row pushtop">
					<div class="col-md-3">
						
							<img src="<?php bloginfo( 'url' ); ?>/media/software.png" alt="Software" class="grey img-circle center-block resource-left">
						
					</div>
					<div class="col-md-8">
						<h3>Software</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
						<p class="soon">coming soon</p>
					</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<?php dynamic_sidebar( 'quick_links' ); ?>
			</div>
			<div class="col-md-12 pushtop">
				<div class="grey">
					<div class="row">
						<div class="col-md-12">
							<img src="http://exrna.org/media/banner-nihlogo.png" alt="" class="img-responsive imgcent">
						</div>
						
						<div class="col-md-12 pushtop">
							<div class="imgcent white email-signup">
				        		
									<?php gravity_form( 2, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex); ?>
								
								<script>
									$(document).ready(function(){
										$( ".gform_body" ).replaceWith( "<div class='form-group'><input name='input_1' id='input_2_1' type='email' value='' class='medium form-control' placeholder='Email Newsletter'></div>" );
									    $('#gform_submit_button_2').addClass('btn btn-warning pull-right');
									});
									</script>
							</div>
						</div>	
					</div>
				</div>
		</div>
	</div>
</div> 

<!-- <div class="container resources pushtop">
	<h1>Resources</h1>
	<div class="row">
		<div class="col-md-6 pushtop">
			<div class="text-center resource-block grey">
				<img src="<?php bloginfo( 'url' ); ?>/media/protocols.png" alt="Protocols">
				<h3>Protocols</h3>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
				<p class="soon">coming soon</p>
			</div>
		</div>
		<div class="col-md-6 pushtop">
			<div class="text-center resource-block grey">
				<img src="<?php bloginfo( 'url' ); ?>/media/data.png" alt="Data">
				<h3>Data</h3>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
				<p class="soon">coming soon</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 pushtop">
			<div class="text-center resource-block grey">
				<img src="<?php bloginfo( 'url' ); ?>/media/standards.png" alt="Standards">
				<h3>Standards</h3>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
				<p class="soon">coming soon</p>
			</div>
		</div>
		<div class="col-md-6 pushtop">
			<div class="text-center resource-block grey">
				<img src="<?php bloginfo( 'url' ); ?>/media/software.png" alt="Software">
				<h3>Software</h3>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
				<p class="soon">coming soon</p>
			</div>
		</div>
	</div>
</div>
<!-- <script>
$(document).ready(function(){
  //Show DMRR
  $("#dmrr").click(function(){
    $(".fp:not(.dmrr)").slideUp(1000);
    $(".dmrr").slideDown(1000);
  });
  //Show Function
  $("#function").click(function(){
    $(".fp:not(.function)").slideUp(1000);
    $(".function").slideDown(1000);
  });
   //Show Biomarker
  $("#biomarker").click(function(){
    $(".fp:not(.biomarker)").slideUp(1000);
    $(".biomarker").slideDown(1000);
  });
   //Show Therapy
  $("#therapy").click(function(){
    $(".fp:not(.therapy)").slideUp(1000);
    $(".therapy").slideDown(1000);
  });
  //Show All Projects
    $("#allp").click(function(){
        $(".fp").slideDown(1000);
  });
});
</script> -->



<?php get_footer(); ?>